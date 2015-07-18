# Data Provider Example

## Build

[![Build Status](https://api.travis-ci.org/geshan/dataprovider-example.png)](https://travis-ci.org/geshan/dataprovider-example)

## Code Quality

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/56ff09b2-7954-4cb2-a6da-6af863775107/small.png)](https://insight.sensiolabs.com/projects/56ff09b2-7954-4cb2-a6da-6af863775107)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/geshan/dataprovider-example/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/geshan/dataprovider-example/?branch=master)
[![Code Climate](https://codeclimate.com/github/geshan/dataprovider-example/badges/gpa.svg)](https://codeclimate.com/github/geshan/dataprovider-example)
[![Codacy Badge](https://www.codacy.com/project/badge/3cdbf95d64b149cc9292bf77150af276)](https://www.codacy.com/app/geshan/dataprovider-example)

## Code Style

[![StyleCI](https://styleci.io/repos/16403318/shield)](https://styleci.io/repos/16403318)

## Description

This is a simple example of using data provider in PHP Unit. It can be used to
write less test with multiple data sets keeping the code coverage high.

```php

    /**
    * Data provider for testCalculateTotal
    * variables are in the order of
    * $paymentMethod, $expectedTotal
    * 
    * @return type
    */
    public function paymentMethodProvider()
    {
        return [
            ['Cash', 100.00],
            ['Credit Card', 95.00],
        ];
    }

    /**
     * Test to check if the order total is calculated correctly
     * for given payment method.
     * 
     * @param string $paymentMethod
     * @param float $expectedTotal
     * 
     * @dataProvider paymentMethodProvider
     */
    public function testCalculateTotal($paymentMethod, $expectedTotal)
    {
        $this->checkout->calculateTotal($paymentMethod);
        $this->assertEquals(
            $this->checkout->getTotal(), 
            $expectedTotal,
            sprintf('Testing total calculation for %s.', $paymentMethod)
        );
    }

```

The description of how use data provider in PHP Unit is provided in my 
[blog post](http://geshan.blogspot.com/2014/02/using-phpunit-data-provider-for-less.html).


## Tests

You can run composer update

```

~> composer update --prefer-dist

```

and then run the tests using the command below on folder where the repo is cloned.

```

phpunit --bootstrap=vendor/autoload.php tests


```

## Available in packagist

The package is availabe in [packagist](http://bit.ly/1tLI2AC). You can use it for reference by adding the followign line
to you composer.json file

```
"data-provider/example" : "0.0.2",
```

## What Next?

Issues are put in HuBorad, do have a [look](http://bit.ly/1Dkepso).

## Contribution Guide

This is just an example
