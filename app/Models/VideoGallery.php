<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get responsive embed URL if external link (YouTube/Vimeo)
     */
    public function getEmbedUrlAttribute(): ?string
    {
        if ($this->type !== 'url' || empty($this->video_url)) {
            return null;
        }

        $url = trim($this->video_url);

        // YouTube Watch URL or youtu.be
        if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))([\w-]{11})/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1] . '?autoplay=1&rel=0';
        }

        // YouTube Shorts URL
        if (preg_match('/youtube\.com\/shorts\/([\w-]{11})/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1] . '?autoplay=1&rel=0';
        }

        // Vimeo URL
        if (preg_match('/vimeo\.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)/', $url, $matches)) {
            return 'https://player.vimeo.com/video/' . end($matches) . '?autoplay=1';
        }

        return $url;
    }

    /**
     * Get auto thumbnail from YouTube or stored thumbnail or default
     */
    public function getDisplayThumbnailAttribute(): string
    {
        if (!empty($this->thumbnail)) {
            return \Illuminate\Support\Facades\Storage::url($this->thumbnail);
        }

        if ($this->type === 'url' && !empty($this->video_url)) {
            // Extract YouTube ID for high quality thumbnail
            if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=|shorts\/))([\w-]{11})/', $this->video_url, $matches)) {
                return 'https://img.youtube.com/vi/' . $matches[1] . '/hqdefault.jpg';
            }
        }

        return 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&q=80&w=800';
    }
}
