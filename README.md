PimPay Bundle
=============

This Bundle integrate the [Pimpay API Wrapper](http://platform.api.pimpay.ru/v2_6/docs/methods) into your Symfony Project.


Installation
------------

### 1: Download

```bash
$ composer require shiptoreps/pimpay-bunle "0.0.1"
```

### 2: Enable

```php
public function registerBundles()
{
    $bundles = [
        // ...
        new PimpayBundle\PimpayBundle(),
    ];
}
```

### 3: Configure

```yaml
pimpay:
  token: "your_token"
  path_key: "your_path_to_private_key"
  passphrase: "your_passphrase"
  hash: "SHA256"
```
