# PHPCart
Simple framework agnostic shopping cart.

Originally from https://github.com/anam-hossain/phpcart I've released this under my own namespace as I needed support for Laravel 7, at the time of writing this there is an open PR on the original repo which has not been responded to.

## Features

- Simple API
- Support multiple cart instances
- Framework agnostic

## Requirements

- PHP 7.2+

## Installation
PHPCart is available via Composer

```bash
$ composer require dcblogdev/phpcart
```

## Usage

### Add Item

The add method required `id`, `name`, `price` and `quantity` keys. However, you can pass any data that your application required.

```php
use Dcblogdev\Phpcart\Cart;

$cart = new Cart();

$cart->add([
    'id'       => 1001,
    'name'     => 'Skinny Jeans',
    'quantity' => 1,
    'price'    => 90
]);
```

### Update Item


```php
$cart->update([
    'id'       => 1001,
    'name'     => 'Hoodie'
]);
```

### Update quantity


```php
$cart->updateQty(1001, 3);
```

### Update price

```php
$cart->updatePrice(1001, 30);
```

### Remove an Item

```php
$cart->remove(1001);
```

### Get all Items

```php
$cart->getItems();
// or
$cart->items();
```

### Get an Item

```php
$cart->get(1001);
```

### Determining if an Item exists in the cart

```php
$cart->has(1001);
```

### Get the total number of items in the cart

```php
$cart->count();
```

### Get the total quantities of items in the cart

```php
$cart->totalQuantity();
```

### Total sum

```php
$cart->getTotal();
```

### Empty the cart

```php
$cart->clear();
```

### Multiple carts

PHPCart supports multiple cart instances, so that you can have as many shopping cart instances on the same page as you want without any conflicts. 

```php
$cart = new Cart('cart1');
// or
$cart->setCart('cart2');
$cart->add([
    'id'       => 1001,
    'name'     => 'Skinny Jeans',
    'quantity' => 1,
    'price'    => 90
]);

//or
$cart->named('cart3')->add([
    'id'       => 1001,
    'name'     => 'Jeans',
    'quantity' => 2,
    'price'    => 100
]);
```
