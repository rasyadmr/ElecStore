<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    use HasUuids;

    /**
     * The data type of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    public function transactionDetails() {
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
