# Scope Info
This module provides you a list of changes from `core_config_data` whenever a value is overridden in a lower scope.

![Magenizr ScopeInfo - Backend](https://images2.imgbox.com/63/6a/LsaFuPb0_o.png)

## System Requirements
- Magento 2.3.x, 2.4.x
- PHP 5.6.x, 7.x

## Installation (Composer)

1. Update your composer.json `composer require "magenizr/magento2-scopeinfo":"1.0.1" --no-update`
2. Install dependencies and update your composer.lock `composer update --lock`

```
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)              
Package operations: 1 install, 0 updates, 0 removals
  - Installing magenizr/magento2-scopeinfo (1.0.1): Downloading (100%)         
Writing lock file
Generating autoload files
```

3. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_ScopeInfo --clear-static-content
```

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
If you experience any issues, don't hesitate to open an issue on [Github](https://github.com/magenizr/Magenizr_ScopeInfo/issues). For a custom build, don't hesitate to contact us on [Magento Marketplace](https://marketplace.magento.com/partner/magenizr).

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
