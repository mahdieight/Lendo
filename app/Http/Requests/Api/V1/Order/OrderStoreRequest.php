<?php

namespace App\Http\Requests\Api\V1\Order;

use App\Enums\Order\OrderAmountEnum;
use App\Enums\Order\OrderInvoiceCountEnum;
use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'amount' => 'required|numeric|in:' . implode(',', OrderAmountEnum::values()),
            'invoice_count' => 'required|numeric|in:' . implode(',', OrderInvoiceCountEnum::values()),
        ];
    }
}
