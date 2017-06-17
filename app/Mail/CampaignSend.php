<?php

namespace App\Mail;

use App\Models\Campaign;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * @param $subscriptions
 * @property Campaign campaign
 */
class CampaignSend extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriptions, $campaign;

    public function __construct($subscriptions, Campaign $campaign)
    {
        $this->subscriptions = $subscriptions;
        $this->campaign = $campaign;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.campaigns.send')
            ->subject(trans('emails.campaigns.send.subject'));
    }
}