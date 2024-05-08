<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class InvoiceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($invoice) {
            return [
                "id" => $invoice->id,
                "customerId" => $invoice->customer_id,
                "amount" => $invoice->amount,
                "status" => $invoice->status,
                "billedDate" => $invoice->billed_date,
                "paidDate" => $invoice->paid_date,
            ];
        })->toArray();
    }
}
