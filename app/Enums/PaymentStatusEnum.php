<?php
  
namespace App\Enums;
 
enum PaymentStatusEnum:string {
    case Pending = 'pending';
    case Active = 'active';
    case Inactive = 'inactive';
    case Rejected = 'rejected';
}