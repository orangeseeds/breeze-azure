<?php

namespace App\Listeners;

use App\Events\PageViewed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Session\Store;

class IncrementViewCount
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    private $session;

    public function __construct(Store $session)
    {
        //
        $this->session = $session;
    }

    private function isPageViewed($consultancy)
    {
        $viewed = $this->session->get('viewed_consultancies',[]); //retrieve the array of slugs of consultancies viewed in this session
        return in_array($consultancy->slug, $viewed); //return the slug of current consultancy and the array
    }

    private function storePage($consultancy)
    {
        $this->session->push('viewed_consultancies', $consultancy->slug); //store the slug of current consultancy in the session
    }
    /**
     * Handle the event.
     *
     * @param  PageViewed  $event
     * @return void
     */
    public function handle(PageViewed $event)
    {
        //
        if(!$this->isPageViewed($event->consultancy))
        {
            $event->consultancy->increment('page_views');
            $this->storePage($event->consultancy);
        }
    }
}
