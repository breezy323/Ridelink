<?php

class Order extends Eloquent {
	/**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'orders';

  protected $hidden = array('user_id', 'product_id', 'order_entity_id');

  public function user()
  {
    return $this->belongsTo('User');
  }

  public function product()
  {
    return $this->belongsTo('Product');
  }

  public function entity()
  {
    return $this->hasOne('OrderEntity');
  }
}
