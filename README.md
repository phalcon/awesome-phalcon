# Awesome Phalcon

[![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome)
[![Build Status](https://api.travis-ci.org/phalcon/awesome-phalcon.svg?branch=master)](https://travis-ci.org/phalcon/awesome-phalcon)


A curated list of awesome Phalcon libraries and resources. Inspired by [awesome-go](https://github.com/avelino/awesome-go).



### Contributing

Please take a quick gander at the [contribution guidelines](CONTRIBUTING.md) first. Thanks to all [contributors](https://github.com/phalcon/awesome-phalcon/graphs/contributors); you rock!

Join us on [Discord](https://discordapp.com/invite/kRc2N2M) to chat with other awesome-phalcon maintainers!


### Contents

- [Awesome Phalcon](#awesome-phalcon)
    - [ACL](#acl)
    - [Application Skeleton](#application-skeleton)
    - [Authentication & OAuth](#authentication--oauth)
    - [CMS & Blogs](#cms--blogs)
    - [Command Line](#command-line)
    - [Dashboard](#dashboard)
    - [Debug](#debug)
    - [i18n](#i18n)
    - [Integration](#integration)
    - [Miscellaneous](#miscellaneous)
    - [ORM](#orm)
    - [ODM](#odm)
    - [Provisioning](#provisioning)
    - [RESTful](#restful)
    - [Routing](#routing)
    - [Searching](#searching)
    - [Shop & Ecommerce](#shop--ecommerce)
    - [Talks](#talks)
    - [Templating](#templating)
    - [Testing](#testing)

- [Server Applications](#server-applications)

- [Resources](#resources)
    - [Conferences](#conferences)
    - [E-Books](#e-books)
    - [Websites](#websites)
        - [Tutorials](#tutorials)

## ACL

*Access control list.*

* [PhalconUserPlugin](https://github.com/calinrada/PhalconUserPlugin) - Plugin based on Vökuró ACL idea


## Application Skeleton

*Various application skeletons.*

* [Album O'Rama](https://github.com/phalcon/album-o-rama) - Sample modular application for the Phalcon Framework
* [Base App](https://github.com/mruz/base-app) - The base application in Phalcon Framework
* [INVO Application](https://github.com/phalcon/invo) - Sample application for the Phalcon Framework
* [MVC](https://github.com/phalcon/mvc) - Examples of Phalcon MVC file structures
* [Phalcon Composer](https://github.com/xxtime/phalcon) - Phalcon with Composer support MySql MongoDb Redis, clean + beauty
* [Vökuró](https://github.com/phalcon/vokuro) - Sample application for Phalcon Framework (Acl, Auth, Security)
* [Webird](https://github.com/perchlabs/webird) - Webird was created to merge the latest PHP and Node.js innovations into a single application stack


## Authentication & OAuth

*Libraries for implementing authentications schemes.*

* [Padlock](https://github.com/tegaphilip/padlock) - A docker-based phalcon authentication server built on top of the PHP OAuth 2.0 Server
* [phalcon-authmiddleware](https://github.com/SidRoberts/phalcon-authmiddleware) - Add middleware events to the dispatcher. Generic design that's compatible with ACL or a custom auth library.


## CMS & Blogs

*Content management systems & blogs.*

* [giada-www](https://github.com/monocasual/giada-www) - Official website of [Giada Loop Machine](https://www.giadamusic.com/)
* [KikCMS](https://github.com/krazzer/kikcms) - CMS built on Phalcon Framework
* [Skopy Blog Engine](https://github.com/yuriygr/skopy) - A simple blog engine for those who want to start learning Phalcon
* [Yona CMS](https://github.com/alexander-torosh/yona-cms) - CMS based on Phalcon Framework with modular structure
* [PhalconCMS](https://github.com/KevinJay/PhalconCMS) - A blog built on Phalcon Framework


## Command Line

*Command line applications & tools.*

* [phalcon-console](https://github.com/viebig/phalcon-console) - Sample bootstraping application for command line applications using the outstanding Phalcon Framework
* [phalcon-cron](https://github.com/SidRoberts/phalcon-cron) - Cron component for Phalcon


## Config

* [Phalcon Config Loader for Yaml](https://github.com/ienaga/PhalconConfig) - Loads all the yml in the directory of the app/config.


## Dashboard

*Admin Panels & Dashboards.*

* [PhalconTime](https://github.com/Videles/PhalconTime) - TimeKeeping tool / Dashboard skeleton


## Debug

*Debug & profiling tools.*

* [dd](https://github.com/phalcon/dd) - This package will add the `dd` and `dump` helpers to your Phalcon application
* [Phalcon BB Debugger](https://github.com/ismail0234/Phalcon-BB-Debugger) - Phalcon BB Debugger Strong and easy install.
* [Phalcon Debugbar](https://github.com/snowair/phalcon-debugbar) - Integrates [PHP Debug Bar](http://phpdebugbar.com) with Phalcon Framework
* [Prophiler](https://github.com/fabfuel/prophiler) - PHP Profiler & Developer Toolbar (built for Phalcon)


## i18n

*List of i18n and l10n libraries and services.*

* [xgettext-template](https://github.com/gmarty/xgettext) - Extract gettext messages from Volt templates using a command line program that is identical to the [xgettext invocation](http://www.gnu.org/software/gettext/manual/gettext.html#xgettext-Invocation).


## Integration

*Integration with third party services*

* [phalcon-logentries](https://github.com/phalcon-orphanage/phalcon-logentries) - Sends log messages to the [Logentries](https://logentries.com/) log management service


## Miscellaneous

*These libraries were placed here because none of the other categories seemed to fit*

* [Breadcrumbs](https://github.com/sergeyklay/breadcrumbs) - Powerful and flexible component for building site breadcrumbs in Phalcon 2+.
* [Feedback](https://quasipickle.github.io/feedback/) - Is intended to be used as a replacement for Phalcon's built-in Flash and Message functionality
* [Incubator](https://github.com/phalcon/incubator) - Repository to publish/share/experiment with new adapters, prototypes or functionality that can potentially be incorporated into the Phalcon Framework
* [yarak](https://github.com/zachleigh/yarak) - Laravel inspired Phalcon devtools
* [phalcon-data-table](https://github.com/maslo2017/phalcon-data-table) - Allows you to simplify the interaction with the bootstrap-table in the Phalcon


## ORM

*Libraries that implement Object-Relational Mapping or datamapping techniques.*

* [phalcon-boundmodels](https://github.com/SidRoberts/phalcon-boundmodels) - Automatically get models based on dispatcher parameters within the Phalcon framework
* [phalcon-repositories](https://github.com/micheleangioni/phalcon-repositories) - Easy Repository pattern for Phalcon
* [phalcon-seeder](https://github.com/SidRoberts/phalcon-seeder) - Database seeder component for Phalcon
* [phalcon-redis-model](https://github.com/ienaga/RedisPlugin) - redis based ORM and Easy Criteria (The correspondence of MySQL sharding.)

## ODM

*Libraries that implement Object-Document Mapper techniques.*

* [phalcon-collection-paginator](https://github.com/angelxmoreno/phalcon-collection-paginator) - A [pagination adapter](https://docs.phalcon.io/3.4/en/db-pagination#data-adapters) for classes that extend `Phalcon\Mvc\Collection`

## Provisioning
*Tools for provisioning a system for a Phalcon application.*
 
* [ansible-phalcon](https://github.com/HanXHX/ansible-phalcon) - Ansible Role to install Phalcon Framework in Debian (provides PHP 5.6 and PHP 7.0 packages)
* [setupify](https://github.com/perchlabs/setupify) - A collection of bash scripts for provisioning a Zephir and Phalcon based system for deployement or development

## RESTful

*Representational state transfer.*

* [Phalcon API](https://github.com/phalcon/phalcon-api) - Implementation of an API application using the Phalcon
* [phalcon-json-api-package](https://github.com/gte451f/phalcon-json-api-package) - A composer package designed to help you create a JSON:API in Phalcon
* [PhREST API](https://github.com/phrest/api) - Phalcon Framework REST API Package


## Routing

*Various routing libraries & extensions.*

* [Phalcon-autorouter](https://github.com/kamilhurajt/Phalcon-autorouter) - Simple way to auto load modules without complicate definition of routes
* [Phalcon Routing for Yaml](https://github.com/ienaga/PhalconRouter) - Routing can be easily configured with yaml


## Searching

*Searching tools & libraries.*

* [ElasticsearchIndexer](https://github.com/SidRoberts/phalcon-elasticsearchindexer) - Elasticsearch indexer component for Phalcon

## Shop & Ecommerce

* [Shopping Cart](https://github.com/sinbadxiii/phalcon-cart) - Simple cart for online store



## Talks

*Conferences, Chats, Forums, etc..*

* [Phanbook](https://github.com/phanbook/phanbook/) - The source for code phanbook.com website
* [Phosphorum](https://github.com/phalcon/forum) - The source for official Phalcon Forum


## Templating

*Libraries and tools for templating.*

* [twig-phalcon](https://github.com/vinyvicente/phalcon-twig) - Twig Template Engine for Phalcon Framework


## Testing

*Testing tools and solutions.*

* [phalcon-demo](https://github.com/Codeception/phalcon-demo) - A modified Phalcon INVO Application to demonstrate basics of Codeception testing.


# Server Applications

* [packagecloud](https://github.com/phalcongelist/packagecloud) - Phalcon distribution hosted on PackageCloud
* [phalcon-docker-nginx](https://github.com/viebig/phalcon-docker-nginx) - Phalcon 3, PHP7, Docker sample starter application
* [phalcon-vm](https://github.com/eugene-manuilov/phalcon-vm) - Vagrant configuration for Phalcon 3.x and PHP7.0 development + MySQL/PostgreSQL/MongoDB, Redis/Memcached, Gearman/RabbitMQ, Elasticsearch/Sphinxsearch on your choice
* [phalcon3-compose](https://github.com/linxlad/phalcon3-compose) - Docker Phalcon 3 development environment


# Resources

*Where to discover new Phalcon libraries.*


## Conferences

*Conferences, IRC, Forums, etc..*

* [Facebook](https://www.facebook.com/Phalcon-Framework-134230726685897) - Phalcon on Facebook
* [Gab](https://gab.com/phalcon) - Phalcon on Gab
* [Phalcon Forums](https://forum.phalcon.io/) - Phalcon Forums
* [Phalcon Russian Community Chat](https://gitter.im/phalcon-rus/chat) - Russian Community Chat in Gitter.im
* [Stack Overflow](https://stackoverflow.com/questions/tagged/phalcon) - StackOverflow Tagged Questions
* [Twitter](https://twitter.com/phalconphp) - Phalcon on Twitter

## E-Books

* [Phalcon PDF Documentation](https://buildmedia.readthedocs.org/media/pdf/phalcon-php-framework-documentation/latest/phalcon-php-framework-documentation.pdf) - Phalcon Framework Documentation


## Websites

* [Built With](https://builtwith.phalcon.io/) - Gallery of applications, demos and projects built with Phalcon Framework
* [Phalcon Blog](https://blog.phalcon.io/) - Phalcon Blog
* [Phalconist](https://github.com/phalcon/phalconist) - Resources catalog for Phalcon Framework on Phalconist


### Tutorials

* [Phalcon Documentation](https://docs.phalcon.io/3.4/en/introduction) - Phalcon Documentation
* [Sitepoint](https://www.sitepoint.com/?s=phalcon) - Articles, tutorials and so more
* [Tutsplus](https://code.tutsplus.com/categories/phalcon/courses) - Tutsplus Code Courses
