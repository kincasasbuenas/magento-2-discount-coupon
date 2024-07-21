# Discount Coupon Sidebar Checkout for Magento 2

## How to install

### 1. Install via composer (recommend)

I recommend you to install Kinuz_DiscountCoupon module via composer. It is easy to install, update and maintaince.

Run the following command in Magento 2 root folder.

#### 1.1 Install

```
composer require kinuz/discount-coupon
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
```

Run compile if your store in Production mode:

```
php bin/magento setup:di:compile
```

### 2. Copy and paste

If you don't want to install via composer, you can use this way. 

- Download [the latest version here](https://github.com/kincasasbuenas/magento-2-discount-coupon/archive/master.zip) 
- Extract `master.zip` file to `app/code/Kinuz/DiscountCoupon` ; You should create a folder path `app/code/Kinuz/DiscountCoupon` if not exist.
- Go to Magento root folder and run upgrade command line to install `Kinuz_DiscountCoupon`:

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

### 2. Configuration

Go to section Stores > Configuration > Kinuz > Discount Coupon

1. Enable or Disabled module

    ![Preview setting module](https://raw.githubusercontent.com/kincasasbuenas/images/main/Configuration_discount_checkout.png)

### 3. Preview module active

Show form discount coupon in sidebar checkout

![Preview module DiscountCoupon](https://raw.githubusercontent.com/kincasasbuenas/images/main/preview_discount_checkout.gif)

