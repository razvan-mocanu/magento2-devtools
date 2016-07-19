# Razvan's DevTools for Magento2

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/razvan-mocanu/magento2-devtools/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/razvan-mocanu/magento2-devtools/?branch=master)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/af00422f-4e3e-4210-8424-b2574ee935bf/big.png)](https://insight.sensiolabs.com/projects/af00422f-4e3e-4210-8424-b2574ee935bf)

## What is it?
This module wraps each block in comment tags and ads information about the block. The available information is: name and template file. This allows the developer to quickly identify blocks and find the associated templates. It doesn't work as the template hints. All the information is contained inside the HTLM which you can inspect with the browser. If you are using Firebug, don't forget to set it to show comments.

## Install via Composer

In the root of your project:
* composer require razvan/module-devtools
* php bin/magento module:enable Razvan_DevTools
* php bin/magento setup:upgrade
