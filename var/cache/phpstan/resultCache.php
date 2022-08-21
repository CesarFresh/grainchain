<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1661120479,
	'meta' => array (
  'cacheVersion' => 'v10-collectedData',
  'phpstanVersion' => '1.8.2',
  'phpVersion' => 80104,
  'projectConfig' => '{parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Stripe\\StripeObject, Illuminate\\Database\\Eloquent\\Model], earlyTerminatingFunctionCalls: [abort, dd], excludePaths: {analyseAndScan: [*.blade.php], analyse: []}, mixinExcludeClasses: [Eloquent], bootstrapFiles: [D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\bootstrap.php], checkOctaneCompatibility: false, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], checkModelProperties: true, checkPhpDocMissingReturn: false, paths: [D:\\Documentos\\Projects\\grain-chain\\app, D:\\Documentos\\Projects\\grain-chain\\tests, D:\\Documentos\\Projects\\grain-chain\\database, D:\\Documentos\\Projects\\grain-chain\\config, D:\\Documentos\\Projects\\grain-chain\\routes], level: 6, tmpDir: D:\\Documentos\\Projects\\grain-chain\\var\\cache\\phpstan, exceptions: {implicitThrows: false, check: {missingCheckedExceptionInThrows: true, tooWideThrowType: true}, uncheckedExceptionClasses: [LogicException, RuntimeException, Error]}, checkMissingIterableValueType: false, checkGenericClassInNonGenericObjectType: false}, conditionalTags: {NunoMaduro\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, NunoMaduro\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule: {phpstan.rules.rule: %checkModelProperties%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule: {phpstan.rules.rule: %checkModelProperties%}}, services: [{class: NunoMaduro\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Types\\RelationDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelRelationsDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: NunoMaduro\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Support\\CollectionHelper}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ViewExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionFilterDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: NunoMaduro\\Larastan\\Rules\\NoModelMakeRule}, {class: NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Types\\RelationParserHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%}}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertiesRuleHelper}, {class: NunoMaduro\\Larastan\\Rules\\ModelRuleHelper}, {class: NunoMaduro\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rule]}, {class: NunoMaduro\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: NunoMaduro\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, NunoMaduro\\Larastan\\Properties\\Schema\\PhpMyAdminDataTypeToPhpTypeConverter, {class: NunoMaduro\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}], rules: [NunoMaduro\\Larastan\\Rules\\RelationExistenceRule]}',
  'analysedPaths' => 
  array (
    0 => 'D:\\Documentos\\Projects\\grain-chain\\app',
    1 => 'D:\\Documentos\\Projects\\grain-chain\\tests',
    2 => 'D:\\Documentos\\Projects\\grain-chain\\database',
    3 => 'D:\\Documentos\\Projects\\grain-chain\\config',
    4 => 'D:\\Documentos\\Projects\\grain-chain\\routes',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'D:\\Documentos\\Projects\\grain-chain/composer.lock' => '7974d49d949ab51783132fdc59f847976087d941',
  ),
  'composerInstalled' => 
  array (
    'D:\\Documentos\\Projects\\grain-chain/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brick/math' => 
        array (
          'pretty_version' => '0.10.2',
          'version' => '0.10.2.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'reference' => '459f2781e1a08d52ee56b0b1444086e038561e3f',
          'dev_requirement' => false,
        ),
        'composer/class-map-generator' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/./class-map-generator',
          'aliases' => 
          array (
          ),
          'reference' => '1e1cb2b791facb2dfe32932a7718cf2571187513',
          'dev_requirement' => true,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/./pcre',
          'aliases' => 
          array (
          ),
          'reference' => 'e300eb6c535192decd27a85bc72a9290f0d6b3bd',
          'dev_requirement' => true,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.3.2',
          'version' => '3.3.2.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/./semver',
          'aliases' => 
          array (
          ),
          'reference' => '3953f23262f2bff1919fc82183ad9acb13ff62c9',
          'dev_requirement' => true,
        ),
        'composer/xdebug-handler' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/./xdebug-handler',
          'aliases' => 
          array (
          ),
          'reference' => 'ced299686f41dce890debac69273b47ffe98a40c',
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.1',
          'version' => '3.0.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'reference' => '0992cc19268b259a39e86f296da5f0677841f42c',
          'dev_requirement' => false,
        ),
        'doctrine/annotations' => 
        array (
          'pretty_version' => '1.13.3',
          'version' => '1.13.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../doctrine/annotations',
          'aliases' => 
          array (
          ),
          'reference' => '648b0343343565c4a056bfc8392201385e8d89f0',
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'reference' => '8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
          'dev_requirement' => false,
        ),
        'doctrine/instantiator' => 
        array (
          'pretty_version' => '1.4.1',
          'version' => '1.4.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../doctrine/instantiator',
          'aliases' => 
          array (
          ),
          'reference' => '10dcfce151b967d20fde1b34ae6640712c3891bc',
          'dev_requirement' => true,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'reference' => 'c268e882d4dbdd85e36e4ad69e02dc284f89d229',
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.3.1',
          'version' => '3.3.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'reference' => 'be85b3f05b46c39bbc0d95f6c071ddff669510fa',
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'reference' => 'f88dcf4b14af14a98ad96b14b2b317969eab6715',
          'dev_requirement' => false,
        ),
        'facade/ignition-contracts' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../facade/ignition-contracts',
          'aliases' => 
          array (
          ),
          'reference' => '3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
          'dev_requirement' => true,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.20.0',
          'version' => '1.20.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'reference' => '37f751c67a5372d4e26353bd9384bc03744ec77b',
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.14.5',
          'version' => '2.14.5.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'reference' => 'a63e5e8f26ebbebf8ed3c5c691637325512eb0dc',
          'dev_requirement' => true,
        ),
        'friendsofphp/php-cs-fixer' => 
        array (
          'pretty_version' => 'v3.10.0',
          'version' => '3.10.0.0',
          'type' => 'application',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../friendsofphp/php-cs-fixer',
          'aliases' => 
          array (
          ),
          'reference' => '76d7da666e66d83a1dc27a9d1c625c80cc4ac1fe',
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'reference' => '58571acbaa5f9f462c9c77e911700ac66f446d4e',
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.0',
          'version' => '1.1.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'reference' => 'a878d45c1914464426dc94da61c9e1d36ae262a8',
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.4.5',
          'version' => '7.4.5.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'reference' => '1dd98b0564cb3f6bd16ce683cb755f94c10fbd82',
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '1.5.1',
          'version' => '1.5.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'reference' => 'fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.4.0',
          'version' => '2.4.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'reference' => '13388f00956b1503577598873fffb5ae994b5737',
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.25.1',
          ),
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v9.25.1',
          'version' => '9.25.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'reference' => 'e8af8c2212e3717757ea7f459a655a2e9e771109',
          'dev_requirement' => false,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.1.1',
          'version' => '1.1.1.0',
          'type' => 'project',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'reference' => '118a55fc3a870f20ae111b7439f18bd20298d388',
          'dev_requirement' => true,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.15.4',
          'version' => '1.15.4.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'reference' => '853dea1fa866a52a93beccc4e5affdc49b98e7d5',
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v3.0.1',
          'version' => '3.0.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'reference' => 'b71e80a3a8e8029e2ec8c1aa814b999609ce16dc',
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'reference' => '09f0e9fb61829f628205b7c94906c28740ff9540',
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.7.2',
          'version' => '2.7.2.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'reference' => 'dff39b661e827dae6e092412f976658df82dbac5',
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.3.5',
          'version' => '2.3.5.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'reference' => '84d74485fdb7074f4f9dd6f02ab957b1de513257',
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.1.1',
          'version' => '1.1.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'reference' => 'a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e',
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'reference' => '81aea9e5217084c7850cd36e1587ee4aad721c6b',
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'reference' => 'ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.5.0',
          'version' => '1.5.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'reference' => 'c10a5f6e06fc2470ab1822fa13fa2a7380f8fbac',
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'reference' => '720488632c590286b88b80e62aa3d3d551ad4a50',
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'reference' => '14daed4296fae74d9e3201d2c4925d1acb7aa614',
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '2.61.0',
          'version' => '2.61.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'reference' => 'bdf4f4fe3a3eac4de84dbec0738082a862c68ba6',
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.2.2',
          'version' => '1.2.2.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'reference' => '9a39cef03a5b34c7de64f551538cbba05c2be5df',
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v3.2.7',
          'version' => '3.2.7.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'reference' => '0af4e3de4df9f1543534beab255ccf459e7a2c99',
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v4.14.0',
          'version' => '4.14.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'reference' => '34bea19b6e03d8153165d8f30bba4c3be86184c1',
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v6.2.1',
          'version' => '6.2.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'reference' => '5f058f7e39278b701e455b3c82ec5298cf001d89',
          'dev_requirement' => true,
        ),
        'nunomaduro/larastan' => 
        array (
          'pretty_version' => 'v2.1.12',
          'version' => '2.1.12.0',
          'type' => 'phpstan-extension',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../nunomaduro/larastan',
          'aliases' => 
          array (
          ),
          'reference' => '65cfc54fa195e509c2e2be119761552017d22a56',
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v1.14.0',
          'version' => '1.14.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'reference' => '10065367baccf13b6e30f5e9246fa4f63a79eb1d',
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.3.0',
          'version' => '5.3.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.6.1',
          'version' => '1.6.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'reference' => '77a32518733312af16a44300404e945338981de3',
          'dev_requirement' => true,
        ),
        'phpmyadmin/sql-parser' => 
        array (
          'pretty_version' => '5.5.0',
          'version' => '5.5.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpmyadmin/sql-parser',
          'aliases' => 
          array (
          ),
          'reference' => '8ab99cd0007d880f49f5aa1807033dbfa21b1cb5',
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.0',
          'version' => '1.9.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'reference' => 'dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
          'dev_requirement' => false,
        ),
        'phpspec/prophecy' => 
        array (
          'pretty_version' => 'v1.15.0',
          'version' => '1.15.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpspec/prophecy',
          'aliases' => 
          array (
          ),
          'reference' => 'bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '1.8.2',
          'version' => '1.8.2.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'reference' => 'c53312ecc575caf07b0e90dee43883fdf90ca67c',
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '9.2.16',
          'version' => '9.2.16.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'reference' => '2593003befdcc10db5e213f9f28814f5aa8ac073',
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '3.0.6',
          'version' => '3.0.6.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '3.1.1',
          'version' => '3.1.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '5.0.3',
          'version' => '5.0.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '9.5.22',
          'version' => '9.5.22.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'reference' => 'e329ac6e8744f461518272612a479fde958752fe',
          'dev_requirement' => true,
        ),
        'psr/cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../psr/cache',
          'aliases' => 
          array (
          ),
          'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
          'dev_requirement' => true,
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0.0 || 2.0.0 || 3.0.0',
            1 => '1.0|2.0|3.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.11.8',
          'version' => '0.11.8.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'reference' => 'f455acf3645262ae389b10e9beba0c358aa6994e',
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '1.2.2',
          'version' => '1.2.2.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'reference' => 'cccc74ee5e328031b15640b51056ee8d3bb66c0a',
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.4.0',
          'version' => '4.4.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'reference' => '373f7bacfcf3de038778ff27dcce5672ddbf4c8a',
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.4.0',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '1.0.8',
          'version' => '1.0.8.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '4.0.6',
          'version' => '4.0.6.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'reference' => '55f4261989e546dc112258c7a75935a81a7ce382',
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d',
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '5.1.4',
          'version' => '5.1.4.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'reference' => '1b5dff7bb151a4db11d49d90e5408e4e938270f7',
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'reference' => '65e8b7db476c5dd267e65eea9cab77584d3cfff9',
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '5.0.5',
          'version' => '5.0.5.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'reference' => '0ca8db5a5fc9c8646244e629625ac486fa286bf2',
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'reference' => 'c1c2e997aa3146983ed888ad08b15470a2e22ecc',
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'reference' => 'cd9d8cf3c5804de4341c283ed787f099f5506172',
          'dev_requirement' => true,
        ),
        'sebastian/resource-operations' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/resource-operations',
          'aliases' => 
          array (
          ),
          'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'reference' => 'b233b84bc4465aff7b57cf1c4bc75c86d00d6dad',
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
          'dev_requirement' => true,
        ),
        'spatie/backtrace' => 
        array (
          'pretty_version' => '1.2.1',
          'version' => '1.2.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../spatie/backtrace',
          'aliases' => 
          array (
          ),
          'reference' => '4ee7d41aa5268107906ea8a4d9ceccde136dbd5b',
          'dev_requirement' => true,
        ),
        'spatie/flare-client-php' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../spatie/flare-client-php',
          'aliases' => 
          array (
          ),
          'reference' => 'b1b974348750925b717fa8c8b97a0db0d1aa40ca',
          'dev_requirement' => true,
        ),
        'spatie/ignition' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../spatie/ignition',
          'aliases' => 
          array (
          ),
          'reference' => '997363fbcce809b1e55f571997d49017f9c623d9',
          'dev_requirement' => true,
        ),
        'spatie/laravel-ignition' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../spatie/laravel-ignition',
          'aliases' => 
          array (
          ),
          'reference' => 'fe37a0eafe6ea040804255c70e9808af13314f87',
          'dev_requirement' => true,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'reference' => '43fcb5c5966b43c56bcfa481368d90d748936ab8',
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'reference' => '0dd5e36b80e1de97f8f74ed7023ac2b837a36443',
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'reference' => '07f1b9cc2ffee6aaafcf4b710fbc38ff736bd918',
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'reference' => '736e42db3fd586d91820355988698e434e1d8419',
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v6.1.0',
          'version' => '6.1.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'reference' => 'a0449a7ad7daa0f7c0acd508259f80544ab5a347',
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'reference' => '02ff5eea2f453731cfbc6bc215e456b781480448',
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'reference' => 'c780e677cddda78417fa5187a7c6cd2f21110db9',
          'dev_requirement' => true,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'reference' => '39696bff2c2970b3779a5cac7bf9f0b88fc2b709',
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'reference' => 'b03712c93759a81fc243ecc18ec4637958afebdb',
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'reference' => '0692bc185a1dbb54864686a1fc6785667279da70',
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'reference' => 'b2db228a93278863d1567f90d7caf26922dbfede',
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'reference' => '9c0247994fc6584da8591ba64b2bffaace9df87d',
          'dev_requirement' => false,
        ),
        'symfony/options-resolver' => 
        array (
          'pretty_version' => 'v6.1.0',
          'version' => '6.1.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/options-resolver',
          'aliases' => 
          array (
          ),
          'reference' => 'a3016f5442e28386ded73c43a32a5b68586dd1c4',
          'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.26.0',
          'version' => '1.26.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'reference' => '6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.26.0',
          'version' => '1.26.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'reference' => '433d05519ce6990bf3530fba6957499d327395c2',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.26.0',
          'version' => '1.26.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'reference' => '59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.26.0',
          'version' => '1.26.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'reference' => '219aa369ceff116e673852dce47c3a41794c14bd',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.26.0',
          'version' => '1.26.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'reference' => '9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php72' => 
        array (
          'pretty_version' => 'v1.26.0',
          'version' => '1.26.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/polyfill-php72',
          'aliases' => 
          array (
          ),
          'reference' => 'bf44a9fd41feaac72b074de600314a93e2ae78e2',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.26.0',
          'version' => '1.26.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'reference' => 'cfa0ae98841b9e461207c13ab093d76b0fa7bace',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php81' => 
        array (
          'pretty_version' => 'v1.26.0',
          'version' => '1.26.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/polyfill-php81',
          'aliases' => 
          array (
          ),
          'reference' => '13f6d1271c663dc5ae9fb843a8f16521db7687a1',
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'reference' => 'a6506e99cfad7059b1ab5cab395854a0a0c21292',
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'reference' => 'ef9108b3a88045b7546e808fb404ddb073dd35ea',
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'reference' => '925e713fe8fcacf6bc05e936edd8dd5441a21239',
          'dev_requirement' => false,
        ),
        'symfony/stopwatch' => 
        array (
          'pretty_version' => 'v6.1.0',
          'version' => '6.1.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/stopwatch',
          'aliases' => 
          array (
          ),
          'reference' => '77dedae82ce2a26e2e9b481855473fc3b3e4e54d',
          'dev_requirement' => true,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'reference' => 'f35241f45c30bcd9046af2bb200a7086f70e1d6b',
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'reference' => 'b042e16087d298d08c1f013ff505d16c12a3b1be',
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'reference' => '606be0f48e05116baef052f7f3abdb345c8e02cc',
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v6.1.3',
          'version' => '6.1.3.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'reference' => 'd5a5e44a2260c5eb5e746bf4f1fbd12ee6ceb427',
          'dev_requirement' => false,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.1',
          'version' => '1.2.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => '2.2.4',
          'version' => '2.2.4.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'reference' => 'da444caae6aca7a19c0c140f68c6182e337d5b1c',
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.4.1',
          'version' => '5.4.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'reference' => '264dce589e7ce37a7ba99cb901eed8249fbec92f',
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'type' => 'library',
          'install_path' => 'D:\\Documentos\\Projects\\grain-chain\\vendor\\composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\bootstrap.php' => '8004bf4a0a0809c507190a9ed3f6544fd9adf804',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'bcmath',
    8 => 'bz2',
    9 => 'calendar',
    10 => 'ctype',
    11 => 'curl',
    12 => 'date',
    13 => 'dom',
    14 => 'fileinfo',
    15 => 'filter',
    16 => 'ftp',
    17 => 'gd',
    18 => 'gettext',
    19 => 'hash',
    20 => 'iconv',
    21 => 'intl',
    22 => 'json',
    23 => 'libxml',
    24 => 'mbstring',
    25 => 'mysqlnd',
    26 => 'openssl',
    27 => 'pcre',
    28 => 'pdo_mysql',
    29 => 'readline',
    30 => 'session',
    31 => 'soap',
    32 => 'sockets',
    33 => 'standard',
    34 => 'tokenizer',
    35 => 'xml',
    36 => 'xmlreader',
    37 => 'xmlwriter',
    38 => 'xsl',
    39 => 'zip',
    40 => 'zlib',
  ),
  'stubFiles' => 
  array (
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Attribute.stub' => '3fa863da0834095c4a86b095a748fb6197103fd1',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\BelongsTo.stub' => '1a843cfba603ff8abb4ba8daccad30e543d311a3',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\BelongsToMany.stub' => '1060968ed7cfd2b9e907ae2228b0e5d97ad57981',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Collection.stub' => '21ebfa3d192750905effe7b7934e5e26a29d8916',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Conditionable.stub' => '7048859990cd8c0c406de1857bf3e462ecece149',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Config\\Repository.stub' => '31fa7b9877710999a42a43fdc751b235a299008f',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Container.stub' => '07d375fd4372a40d348f21370450a5724df7bf47',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Pagination.stub' => '076d4f18728a2670c67738cf2b3278c663e8b656',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Queue.stub' => 'cd30534d5869982bcf995a98521b3710fdab5eb7',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Support.stub' => '9c1293dfdc2c79dcdeeb562fc8673d4d3d280ce7',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Translation.stub' => '00ef14ec92a1facfa8edd3822cac3f664435a0a6',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\UrlGenerator.stub' => 'f29d5ad0d02ca54293a36c0c3a5b1f8201be4d3b',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Cookie\\CookieJar.stub' => '41fa714b3989048f3bb042473837c177034d2559',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Cookie\\SymfonyCookie.stub' => '54a800384b675f8852edf7a8c91553564e14b618',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\EloquentBuilder.stub' => '99ac2f79927fa50db75224a205006ec7df13b061',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\EloquentCollection.stub' => 'aa40d6c14bc40afea48862630b9fec3c2ae0a499',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Enumerable.stub' => '3cae64ad696993afc180cabed8a1a04e0e886f07',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\EnumeratesValues.stub' => 'a182d39aae1efe6657019197477801c8fbb643a6',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Facades.stub' => 'ab83969731203fd4d346710d4b41422d799b7c35',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Factory.stub' => 'd378de09eb0e80c6eba235c0b254b5cc737359a4',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Gate.stub' => '54fe6beb129f421af9f212972c7dc387e94ee714',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasMany.stub' => '8e659e8330c7a9b7bb4692cde85cd0b4662fe555',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasManyThrough.stub' => 'aba19d2a5570308425d5df8c934b8a628013d996',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasOne.stub' => '28f14c1b29b7110fd6837432e9d94ee3ad09b4c2',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasOneOrMany.stub' => '8c055867941b97c39cd8508ad713c0594de45491',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasOneThrough.stub' => 'a7c1344f0fcb94f44795c7547e7c1abc46f255d9',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Helpers.stub' => 'ec6f54b43deef4955a1396f14c4d6a5decb7bf5b',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\HigherOrderProxies.stub' => 'c9d7c18bd751e75ea2918cfff06baa3ca496f48f',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Http\\RedirectResponse.stub' => 'fd20aea92d8595e8bcd9c60fd8d07573d63bba83',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Http\\Request.stub' => 'c5d81b57b096d8d12a53a0684a0b262819f36cae',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Log\\Logger.stub' => '320023c7c0d4e976aae7345f51fb6c5c287e34b2',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Mailable.stub' => '46eaf57e6b7eacd28ece582bb25ecccf7c1faf54',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Model.stub' => '8bc17114558dbd2770810499a67a49df4cfec3f2',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphMany.stub' => 'f963e9ca4853c4b6b6159310f4eacd76f5dec90b',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphOne.stub' => '695ed13bf23b334292bc9ead7cd8a18e31cfa03d',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphOneOrMany.stub' => '4350914cf747c61c8d0ea876397b1095c205dd52',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphTo.stub' => '539a5a05c4bc332fbb997260d17807cc0014282f',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphToMany.stub' => '0f451a6df1ea4c2d70c70cd9fe99cb7ead901ec7',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Pagination.stub' => '133b4ce4ee4b487c7b3b69a3f1238a0d6c73f9f4',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\QueryBuilder.stub' => 'db4c676e5c129957bdac9ae0d1baa8e7eabf1386',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Redis\\Connection.stub' => '594198d0412613f8e8ef487a77e3f63e270ba5a5',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Relation.stub' => '122ec732291a92e367fd2174caf438cf0141269b',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Route.stub' => '3c54b8aa6bd5822d8c803d8a6be76d1beb70a3a0',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Routing\\Redirector.stub' => '423332adae4e21b04a2ec6730b24a0eb1f74279e',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Session\\SessionManager.stub' => 'ac2f374ffd6cdb73a076770d4f29fc6140d564e3',
    'D:\\Documentos\\Projects\\grain-chain\\vendor\\nunomaduro\\larastan\\src/../stubs\\Support\\Manager.stub' => '86d0cbeedaf5005bdf91c33882642d802dc97e87',
    'phar://D:/Documentos/Projects/grain-chain/vendor/phpstan/phpstan/phpstan.phar/src/PhpDoc/../../stubs/Countable.stub' => 'e3519ee3706ffbe1398770146aadfc6a62b2b66f',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ArrayObject.stub' => '34c9e85af3fe514ea3e18f7fc87e03f7890e3a46',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\Exception.stub' => '7539dffcb4b871de4319a3081c26e79d85ceaed0',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\PDOStatement.stub' => '7ed5b8ee9a46556e28551a26f7501a85ac343483',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionAttribute.stub' => '614c3dcc562c65118608b1c4e1176684ce1a2cc5',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionClass.stub' => '78d777787f0085b0b72f207c241355d82d27e77a',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionClassConstant.stub' => '7c0f2ee95301fed439a48f7d55e5d4d1487c9bb8',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionFunctionAbstract.stub' => '2196325c2433ae733e0e7993400429493a1cd342',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionMethod.stub' => '4fcf212f681a5d09b4c68c617b09dca662576f92',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionParameter.stub' => '3e648b120364fd63447250d11819d6206c9b03e9',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionProperty.stub' => '78f68f13d18db0d71458216a47e9c8cec4b76024',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\SplObjectStorage.stub' => '8c1272fb5f32ab3478e0c805276609cd02277ee4',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\WeakReference.stub' => '2fadf02e9175d02a0d39240d89ae38bc939aa605',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\arrayFunctions.stub' => '5b92fb37d87ec73160fb6db3700a9bcad6e137e2',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\core.stub' => '73d920b28c04c7c788ed0439d9b14c64d964be29',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\date.stub' => '7ff81af2dccda3d1f3565a18fd5702331ae54998',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\dom.stub' => '5f1bc98728f4b21dec5689969396f0530996eb98',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ext-ds.stub' => '668e84027774aab7c0b91933a178f13dead8ed9c',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\iterable.stub' => 'fc9f9b0f68a23bd766d3c327a7b8106be8990e0a',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\mysqli.stub' => '393a65057ae1aeb5492f3dd45166eac0150ed8e9',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\spl.stub' => '6a8ce07b7dc82139ffd4ab1e84414e984801b065',
    'phar://D:\\Documentos\\Projects\\grain-chain\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\zip.stub' => 'aff61beeb3e9dfaed0eede432921df5eee2d3b40',
  ),
  'level' => '6',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  'D:\\Documentos\\Projects\\grain-chain\\routes\\console.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Undefined variable: $this',
       'file' => 'D:\\Documentos\\Projects\\grain-chain\\routes\\console.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Documentos\\Projects\\grain-chain\\routes\\console.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
        'variableName' => 'this',
        'statementDepth' => 2,
        'statementOrder' => 0,
        'depth' => 1,
        'order' => 0,
        'variables' => 
        array (
        ),
        'parentVariables' => 
        array (
          0 => 
          array (
          ),
        ),
      ),
    )),
  ),
); },
	'collectedDataCallback' => static function (): array { return array (
); },
	'dependencies' => array (
  'D:\\Documentos\\Projects\\grain-chain\\app\\Console\\Kernel.php' => 
  array (
    'fileHash' => '6c9091d1186b459f5cbf8df9ce929b9c014c1c31',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Exceptions\\Handler.php' => 
  array (
    'fileHash' => 'dde8b4b9586952b947a8cf785549dc7d71e0b75a',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Controllers\\Controller.php' => 
  array (
    'fileHash' => '13bddc3dd3192f7c416428851a8e647002f48b11',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Kernel.php' => 
  array (
    'fileHash' => '7c25551e1bc794a818de49153800222afe9ebbe9',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\Authenticate.php' => 
  array (
    'fileHash' => '3a9cf6fad1ad20f3a98374519faeafdd6fe6fa9d',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Kernel.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\EncryptCookies.php' => 
  array (
    'fileHash' => 'fcbbfaae9d7ac781cd043ee7ce2ee66800d075ee',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Kernel.php',
      1 => 'D:\\Documentos\\Projects\\grain-chain\\config\\sanctum.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\PreventRequestsDuringMaintenance.php' => 
  array (
    'fileHash' => '3f1cc28f08b8a3a8bbd1495e187fc197110cdab1',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Kernel.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\RedirectIfAuthenticated.php' => 
  array (
    'fileHash' => 'd258a93e9f63c4309b7669f3eea19821253e3a67',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Kernel.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\TrimStrings.php' => 
  array (
    'fileHash' => 'fdae9e792d68b2827446435ff17d6848726a1e81',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Kernel.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\TrustHosts.php' => 
  array (
    'fileHash' => '09cac94cf92d79c951b51470ac0dcb8d600e222b',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\TrustProxies.php' => 
  array (
    'fileHash' => '4c915478c380e43a2889f66130fe95f9b90ca5f0',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Kernel.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\ValidateSignature.php' => 
  array (
    'fileHash' => '487d0594fd382ee5d82a8f734566049bce8e018a',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Kernel.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\VerifyCsrfToken.php' => 
  array (
    'fileHash' => 'f40416cadebf79cecb5ffaa1d7bed8d360f8addd',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Kernel.php',
      1 => 'D:\\Documentos\\Projects\\grain-chain\\config\\sanctum.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Models\\User.php' => 
  array (
    'fileHash' => '82086d7327875bacec2a0e5b2b5a6d71ddb89f7c',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\app\\Providers\\RouteServiceProvider.php',
      1 => 'D:\\Documentos\\Projects\\grain-chain\\config\\auth.php',
      2 => 'D:\\Documentos\\Projects\\grain-chain\\routes\\api.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'fileHash' => '3ac3cc2d51ad9ac8a87692c3107fc1813b310714',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\config\\app.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Providers\\AuthServiceProvider.php' => 
  array (
    'fileHash' => '846578501ba6a808627be70848cbeafaa492c681',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\config\\app.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Providers\\BroadcastServiceProvider.php' => 
  array (
    'fileHash' => 'bae58bde4982baaf3929a3f53e0e6f2ad34bb50e',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Providers\\EventServiceProvider.php' => 
  array (
    'fileHash' => 'dbbbb958761a0c9cba799b54e3036c0d3d027932',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\config\\app.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Providers\\RouteServiceProvider.php' => 
  array (
    'fileHash' => '0c9bb756d199f22aaf91695bdbd890a8cddeba65',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\RedirectIfAuthenticated.php',
      1 => 'D:\\Documentos\\Projects\\grain-chain\\config\\app.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\app.php' => 
  array (
    'fileHash' => 'c9a6e23d2a2af628a26672b22c743e6f79e5ba18',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\auth.php' => 
  array (
    'fileHash' => '9662be43ca01e46adecd46368794c6945d7981f9',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\broadcasting.php' => 
  array (
    'fileHash' => '234eee7c03d5f0a057c50ae09aeb333bb3a1f0e4',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\cache.php' => 
  array (
    'fileHash' => '3843756e7a25b530d3b7525356a3dccbfe42f2ba',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\cors.php' => 
  array (
    'fileHash' => '5a1ab3b06b572de73c69301310e7926683c3180c',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\database.php' => 
  array (
    'fileHash' => '62a018cea0bd12412e433829876294b9280920f4',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\filesystems.php' => 
  array (
    'fileHash' => '24e11749cddc9f0d7ca87ff2f448ff84c08371bc',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\hashing.php' => 
  array (
    'fileHash' => 'c2fdd4caab50167fb31fd01cc649c26e1d6c96b0',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\logging.php' => 
  array (
    'fileHash' => 'a0b4e9a3120d7688b61cb5d0e907d57f9276b363',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\mail.php' => 
  array (
    'fileHash' => '19250f6453fa37faacc13e0f8d34458ac86cb1bd',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\queue.php' => 
  array (
    'fileHash' => 'e780e28ed537a8547079d3d4dc6c84ab8d4ed93e',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\sanctum.php' => 
  array (
    'fileHash' => '312e8bc24c0de41d23888c629cd3555b372bc7d5',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\services.php' => 
  array (
    'fileHash' => '4b80f7e3f84269fa8f5e5be10a947df5e50c30fc',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\session.php' => 
  array (
    'fileHash' => '03641bdc8c3e979fb6b728a4e06ddf46a8a66d29',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\config\\view.php' => 
  array (
    'fileHash' => '2f9e73c59f7a34d048a7246cd1414d285638789d',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\database\\factories\\UserFactory.php' => 
  array (
    'fileHash' => 'f87a24e89818409d8c7b3e5ab57ad2f2da59bf6a',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\database\\migrations\\2014_10_12_000000_create_users_table.php' => 
  array (
    'fileHash' => '29b3a04ed9bb79e5f274a534c767d8f1b6e4b62d',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\database\\migrations\\2014_10_12_100000_create_password_resets_table.php' => 
  array (
    'fileHash' => 'cce4bdc6000a1ecac16a8cb11d1db8b3acf8974e',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\database\\migrations\\2019_08_19_000000_create_failed_jobs_table.php' => 
  array (
    'fileHash' => '046119fda516fc94a19698619f61f892256f56aa',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\database\\migrations\\2019_12_14_000001_create_personal_access_tokens_table.php' => 
  array (
    'fileHash' => 'a5d010460cd4bf6e2387623c5389ec16a547d3b1',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    'fileHash' => 'b6e772ccdf206ba96f4f30137b7f518825d61346',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\routes\\api.php' => 
  array (
    'fileHash' => 'bbbeef7dd533ae0b5a11c4307a7b98767b1b1b0f',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\routes\\channels.php' => 
  array (
    'fileHash' => '596353ce723d0b49a5a733c55ec4766a17b4d2dc',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\routes\\console.php' => 
  array (
    'fileHash' => '1332379b839ce87f33b72901953d388ffaa7f940',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\routes\\web.php' => 
  array (
    'fileHash' => '3dbe7ee91bfc1ef4f04a644d1fa5a6cec7710b2f',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\tests\\CreatesApplication.php' => 
  array (
    'fileHash' => '16b935b5559227e4849eca60a98bf06cf92cda3c',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\tests\\Feature\\ExampleTest.php',
      1 => 'D:\\Documentos\\Projects\\grain-chain\\tests\\TestCase.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\tests\\Feature\\ExampleTest.php' => 
  array (
    'fileHash' => '7ebd06e3e90ecde5a7712c46e081b62f8817953e',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\tests\\TestCase.php' => 
  array (
    'fileHash' => '895ec7a34b6905c178902ce310866a0702fdbec7',
    'dependentFiles' => 
    array (
      0 => 'D:\\Documentos\\Projects\\grain-chain\\tests\\Feature\\ExampleTest.php',
    ),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\tests\\Unit\\ExampleTest.php' => 
  array (
    'fileHash' => '3edfa33bd0f074c412936180eb2ed8943364752e',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'D:\\Documentos\\Projects\\grain-chain\\app\\Console\\Kernel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Console\\Kernel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'schedule',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the application\'s command schedule.
     *
     * @param  \\Illuminate\\Console\\Scheduling\\Schedule  $schedule
     * @return void
     */',
             'namespace' => 'App\\Console',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'schedule',
               'type' => 'Illuminate\\Console\\Scheduling\\Schedule',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'commands',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the commands for the application.
     *
     * @return void
     */',
             'namespace' => 'App\\Console',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Exceptions\\Handler.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Handler',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Exceptions\\Handler',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'levels',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\\Throwable>, \\Psr\\Log\\LogLevel::*>
     */',
             'namespace' => 'App\\Exceptions',
             'uses' => 
            array (
              'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dontReport',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\\Throwable>>
     */',
             'namespace' => 'App\\Exceptions',
             'uses' => 
            array (
              'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dontFlash',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Exceptions',
             'uses' => 
            array (
              'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */',
             'namespace' => 'App\\Exceptions',
             'uses' => 
            array (
              'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Controllers\\Controller.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        1 => 'Illuminate\\Foundation\\Bus\\DispatchesJobs',
        2 => 'Illuminate\\Foundation\\Validation\\ValidatesRequests',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Kernel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Kernel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middleware',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middlewareGroups',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'routeMiddleware',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array<string, class-string|string>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\Authenticate.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\Authenticate',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Auth\\Middleware\\Authenticate',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'redirectTo',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return string|null
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Auth\\Middleware\\Authenticate',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\EncryptCookies.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\EncryptCookies',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\PreventRequestsDuringMaintenance.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\PreventRequestsDuringMaintenance',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\RedirectIfAuthenticated.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\RedirectIfAuthenticated',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  \\Closure(\\Illuminate\\Http\\Request): (\\Illuminate\\Http\\Response|\\Illuminate\\Http\\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \\Illuminate\\Http\\Response|\\Illuminate\\Http\\RedirectResponse
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'closure' => 'Closure',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guards',
               'type' => NULL,
               'byRef' => false,
               'variadic' => true,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\TrimStrings.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrimStrings',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\TrimStrings',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the attributes that should not be trimmed.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\TrimStrings',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\TrustHosts.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrustHosts',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Middleware\\TrustHosts',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hosts',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustHosts',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\TrustProxies.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrustProxies',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Middleware\\TrustProxies',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'proxies',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustProxies',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'headers',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustProxies',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\ValidateSignature.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\ValidateSignature',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'ignore',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the parameters that should be ignored.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Http\\Middleware\\VerifyCsrfToken.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\VerifyCsrfToken',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Models\\User.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     *
     * @return void
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     *
     * @return void
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Providers\\AuthServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AuthServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'policies',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any authentication / authorization services.
     *
     * @return void
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Providers\\BroadcastServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\BroadcastServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     *
     * @return void
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Providers\\EventServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\EventServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'listen',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'event' => 'Illuminate\\Support\\Facades\\Event',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any events for your application.
     *
     * @return void
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'event' => 'Illuminate\\Support\\Facades\\Event',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'shouldDiscoverEvents',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'event' => 'Illuminate\\Support\\Facades\\Event',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\app\\Providers\\RouteServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\RouteServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HOME',
               'value' => '\'/home\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configureRateLimiting',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Configure the rate limiters for the application.
     *
     * @return void
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\database\\factories\\UserFactory.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\App\\Models\\User>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     *
     * @return static
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Seed the application\'s database.
     *
     * @return void
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\tests\\CreatesApplication.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Tests\\CreatesApplication',
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\tests\\Feature\\ExampleTest.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\Feature\\ExampleTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_the_application_returns_a_successful_response',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A basic test example.
     *
     * @return void
     */',
             'namespace' => 'Tests\\Feature',
             'uses' => 
            array (
              'testcase' => 'Tests\\TestCase',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\tests\\TestCase.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\TestCase',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Testing\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Tests\\CreatesApplication',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Documentos\\Projects\\grain-chain\\tests\\Unit\\ExampleTest.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\Unit\\ExampleTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'PHPUnit\\Framework\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_that_true_is_true',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A basic test example.
     *
     * @return void
     */',
             'namespace' => 'Tests\\Unit',
             'uses' => 
            array (
              'testcase' => 'PHPUnit\\Framework\\TestCase',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];