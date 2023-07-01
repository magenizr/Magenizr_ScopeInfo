[![Magenizr Plus](https://images2.imgbox.com/11/6b/yVOOloaA_o.gif)](https://account.magenizr.com)
---

[![Latest Stable Version](http://poser.pugx.org/magenizr/magento2-scopeinfo/v)](https://packagist.org/packages/magenizr/magento2-scopeinfo) [![Total Downloads](http://poser.pugx.org/magenizr/magento2-scopeinfo/downloads)](https://packagist.org/packages/magenizr/magento2-scopeinfo) [![Latest Unstable Version](http://poser.pugx.org/magenizr/magento2-scopeinfo/v/unstable)](https://packagist.org/packages/magenizr/magento2-scopeinfo) [![License](http://poser.pugx.org/magenizr/magento2-scopeinfo/license)](https://packagist.org/packages/magenizr/magento2-scopeinfo) [![PHP Version Require](http://poser.pugx.org/magenizr/magento2-scopeinfo/require/php)](https://packagist.org/packages/magenizr/magento2-scopeinfo)

# Scope Info
This module provides you a list of changes from `core_config_data` whenever a value is overridden in a lower scope.

![Magenizr ScopeInfo - Backend](https://images2.imgbox.com/f2/5c/6KJVWLVR_o.png)
![Magenizr ScopeInfo - Backend](https://images2.imgbox.com/a3/3d/zveptDvr_o.png)

## System Requirements
- Magento 2.3.x, 2.4.x
- PHP 7.x, 8.1

## Installation (Composer 2)

1. Update your composer.json `composer require "magenizr/magento2-scopeinfo":"1.0.1" --no-update`
2. Use `composer update magenizr/magento2-scopeinfo --no-install` to update your composer.lock file.

```
Updating dependencies
Lock file operations: 1 install, 1 update, 0 removals
  - Locking magenizr/magento2-scopeinfo (1.0.1)
```

3. And then `composer install` to install the package.

```
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Package operations: 1 install, 0 update, 0 removals
  - Installing magenizr/magento2-scopeinfo (1.0.1): Extracting archive
```

4. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_ScopeInfo --clear-static-content
```

## Installation (Manually)
1. Download the code.
2. Extract the downloaded tar.gz file. Example: `tar -xzf Magenizr_ScopeInfo_1.0.1.tar.gz`.
3. Copy the code into `./app/code/Magenizr/ScopeInfo/`.
4. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_ScopeInfo --clear-static-content
```

## Features
* Shows a list of `core_config_data` changes in lower scopes
* Scopes are linked so that you can open it in a new tab

## Usage
Simply go to `Stores > Configuration > Advanced > System > Scope Info`, enable the module and clear the cache.

## Support
If you experience any issues, don't hesitate to open an issue on [Github](https://github.com/magenizr/Magenizr_ScopeInfo/issues).

## Purchase
This module is available for free on [GitHub](https://github.com/magenizr).

## Contact
Follow us on [GitHub](https://github.com/magenizr), [Twitter](https://twitter.com/magenizr) and [Facebook](https://www.facebook.com/magenizr).

## History
===== 1.0.1 =====
* Cleanup various files to meet coding standards (EQP, ECG)
* Don't remove default comments and optimize compatibility [#1](https://github.com/magenizr/Magenizr_ScopeInfo/pull/1)

===== 1.0.0 =====
* Stable version

## License
[OSL - Open Software Licence 3.0](https://opensource.org/licenses/osl-3.0.php)
