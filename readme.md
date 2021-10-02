[![ExtDN M2 Coding Standard](https://github.com/eugene-petrov/magento2-controller/actions/workflows/coding-standard.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-controller/actions/workflows/coding-standard.yml)
[![ExtDN M2 Mess Detector](https://github.com/eugene-petrov/magento2-controller/actions/workflows/mess-detector.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-controller/actions/workflows/mess-detector.yml)
[![ExtDN M2 PHPStan](https://github.com/eugene-petrov/magento2-controller/actions/workflows/phpstan.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-controller/actions/workflows/phpstan.yml)

***Snippet_Controller***

Task: you need to create a frontend or admin controller.

Frontend: `http://{host.name}/snippet/`

Admin: Admin Panel > Content > Snippet Admin Controller

To enable this module execute:
- php bin/magento --clear-static-content module:enable Snippet_Controller
- php bin/magento setup:upgrade
