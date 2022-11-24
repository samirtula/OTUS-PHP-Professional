<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7819d6e69eb13e4586086d4c066a5fec
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Slim\\Psr7\\' => 10,
            'Slim\\Http\\' => 10,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'F' => 
        array (
            'Fig\\Http\\Message\\' => 17,
            'FastRoute\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Slim\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/psr7/src',
        ),
        'Slim\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/http/src',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Fig\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/fig/http-message-util/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\HTTP\\HTTPController' => __DIR__ . '/../..' . '/src/HTTP/HTTPController.php',
        'App\\Traits\\HttpResponseTrait' => __DIR__ . '/../..' . '/src/Traits/HttpResponseTrait.php',
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FastRoute\\BadRouteException' => __DIR__ . '/..' . '/nikic/fast-route/src/BadRouteException.php',
        'FastRoute\\DataGenerator' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator.php',
        'FastRoute\\DataGenerator\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/CharCountBased.php',
        'FastRoute\\DataGenerator\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupCountBased.php',
        'FastRoute\\DataGenerator\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupPosBased.php',
        'FastRoute\\DataGenerator\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/MarkBased.php',
        'FastRoute\\DataGenerator\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/RegexBasedAbstract.php',
        'FastRoute\\Dispatcher' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher.php',
        'FastRoute\\Dispatcher\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/CharCountBased.php',
        'FastRoute\\Dispatcher\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupCountBased.php',
        'FastRoute\\Dispatcher\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupPosBased.php',
        'FastRoute\\Dispatcher\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/MarkBased.php',
        'FastRoute\\Dispatcher\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/RegexBasedAbstract.php',
        'FastRoute\\Route' => __DIR__ . '/..' . '/nikic/fast-route/src/Route.php',
        'FastRoute\\RouteCollector' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteCollector.php',
        'FastRoute\\RouteParser' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser.php',
        'FastRoute\\RouteParser\\Std' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser/Std.php',
        'Fig\\Http\\Message\\RequestMethodInterface' => __DIR__ . '/..' . '/fig/http-message-util/src/RequestMethodInterface.php',
        'Fig\\Http\\Message\\StatusCodeInterface' => __DIR__ . '/..' . '/fig/http-message-util/src/StatusCodeInterface.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/RequestFactoryInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ResponseFactoryInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/StreamFactoryInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UriFactoryInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Psr\\Http\\Server\\MiddlewareInterface' => __DIR__ . '/..' . '/psr/http-server-middleware/src/MiddlewareInterface.php',
        'Psr\\Http\\Server\\RequestHandlerInterface' => __DIR__ . '/..' . '/psr/http-server-handler/src/RequestHandlerInterface.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/DummyTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'Slim\\App' => __DIR__ . '/..' . '/slim/slim/Slim/App.php',
        'Slim\\CallableResolver' => __DIR__ . '/..' . '/slim/slim/Slim/CallableResolver.php',
        'Slim\\Error\\AbstractErrorRenderer' => __DIR__ . '/..' . '/slim/slim/Slim/Error/AbstractErrorRenderer.php',
        'Slim\\Error\\Renderers\\HtmlErrorRenderer' => __DIR__ . '/..' . '/slim/slim/Slim/Error/Renderers/HtmlErrorRenderer.php',
        'Slim\\Error\\Renderers\\JsonErrorRenderer' => __DIR__ . '/..' . '/slim/slim/Slim/Error/Renderers/JsonErrorRenderer.php',
        'Slim\\Error\\Renderers\\PlainTextErrorRenderer' => __DIR__ . '/..' . '/slim/slim/Slim/Error/Renderers/PlainTextErrorRenderer.php',
        'Slim\\Error\\Renderers\\XmlErrorRenderer' => __DIR__ . '/..' . '/slim/slim/Slim/Error/Renderers/XmlErrorRenderer.php',
        'Slim\\Exception\\HttpBadRequestException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpBadRequestException.php',
        'Slim\\Exception\\HttpException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpException.php',
        'Slim\\Exception\\HttpForbiddenException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpForbiddenException.php',
        'Slim\\Exception\\HttpGoneException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpGoneException.php',
        'Slim\\Exception\\HttpInternalServerErrorException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpInternalServerErrorException.php',
        'Slim\\Exception\\HttpMethodNotAllowedException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpMethodNotAllowedException.php',
        'Slim\\Exception\\HttpNotFoundException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpNotFoundException.php',
        'Slim\\Exception\\HttpNotImplementedException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpNotImplementedException.php',
        'Slim\\Exception\\HttpSpecializedException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpSpecializedException.php',
        'Slim\\Exception\\HttpUnauthorizedException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpUnauthorizedException.php',
        'Slim\\Factory\\AppFactory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/AppFactory.php',
        'Slim\\Factory\\Psr17\\GuzzlePsr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/GuzzlePsr17Factory.php',
        'Slim\\Factory\\Psr17\\HttpSoftPsr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/HttpSoftPsr17Factory.php',
        'Slim\\Factory\\Psr17\\LaminasDiactorosPsr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/LaminasDiactorosPsr17Factory.php',
        'Slim\\Factory\\Psr17\\NyholmPsr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/NyholmPsr17Factory.php',
        'Slim\\Factory\\Psr17\\Psr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/Psr17Factory.php',
        'Slim\\Factory\\Psr17\\Psr17FactoryProvider' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/Psr17FactoryProvider.php',
        'Slim\\Factory\\Psr17\\ServerRequestCreator' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/ServerRequestCreator.php',
        'Slim\\Factory\\Psr17\\SlimHttpPsr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/SlimHttpPsr17Factory.php',
        'Slim\\Factory\\Psr17\\SlimHttpServerRequestCreator' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/SlimHttpServerRequestCreator.php',
        'Slim\\Factory\\Psr17\\SlimPsr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/SlimPsr17Factory.php',
        'Slim\\Factory\\ServerRequestCreatorFactory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/ServerRequestCreatorFactory.php',
        'Slim\\Handlers\\ErrorHandler' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/ErrorHandler.php',
        'Slim\\Handlers\\Strategies\\RequestHandler' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestHandler.php',
        'Slim\\Handlers\\Strategies\\RequestResponse' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestResponse.php',
        'Slim\\Handlers\\Strategies\\RequestResponseArgs' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestResponseArgs.php',
        'Slim\\Handlers\\Strategies\\RequestResponseNamedArgs' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestResponseNamedArgs.php',
        'Slim\\Http\\Factory\\DecoratedResponseFactory' => __DIR__ . '/..' . '/slim/http/src/Factory/DecoratedResponseFactory.php',
        'Slim\\Http\\Factory\\DecoratedServerRequestFactory' => __DIR__ . '/..' . '/slim/http/src/Factory/DecoratedServerRequestFactory.php',
        'Slim\\Http\\Factory\\DecoratedUriFactory' => __DIR__ . '/..' . '/slim/http/src/Factory/DecoratedUriFactory.php',
        'Slim\\Http\\Interfaces\\ResponseInterface' => __DIR__ . '/..' . '/slim/http/src/Interfaces/ResponseInterface.php',
        'Slim\\Http\\Response' => __DIR__ . '/..' . '/slim/http/src/Response.php',
        'Slim\\Http\\ServerRequest' => __DIR__ . '/..' . '/slim/http/src/ServerRequest.php',
        'Slim\\Http\\Uri' => __DIR__ . '/..' . '/slim/http/src/Uri.php',
        'Slim\\Interfaces\\AdvancedCallableResolverInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/AdvancedCallableResolverInterface.php',
        'Slim\\Interfaces\\CallableResolverInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/CallableResolverInterface.php',
        'Slim\\Interfaces\\DispatcherInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/DispatcherInterface.php',
        'Slim\\Interfaces\\ErrorHandlerInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/ErrorHandlerInterface.php',
        'Slim\\Interfaces\\ErrorRendererInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/ErrorRendererInterface.php',
        'Slim\\Interfaces\\InvocationStrategyInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/InvocationStrategyInterface.php',
        'Slim\\Interfaces\\MiddlewareDispatcherInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/MiddlewareDispatcherInterface.php',
        'Slim\\Interfaces\\Psr17FactoryInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Psr17FactoryInterface.php',
        'Slim\\Interfaces\\Psr17FactoryProviderInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Psr17FactoryProviderInterface.php',
        'Slim\\Interfaces\\RequestHandlerInvocationStrategyInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RequestHandlerInvocationStrategyInterface.php',
        'Slim\\Interfaces\\RouteCollectorInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteCollectorInterface.php',
        'Slim\\Interfaces\\RouteCollectorProxyInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteCollectorProxyInterface.php',
        'Slim\\Interfaces\\RouteGroupInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteGroupInterface.php',
        'Slim\\Interfaces\\RouteInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteInterface.php',
        'Slim\\Interfaces\\RouteParserInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteParserInterface.php',
        'Slim\\Interfaces\\RouteResolverInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteResolverInterface.php',
        'Slim\\Interfaces\\ServerRequestCreatorInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/ServerRequestCreatorInterface.php',
        'Slim\\Logger' => __DIR__ . '/..' . '/slim/slim/Slim/Logger.php',
        'Slim\\MiddlewareDispatcher' => __DIR__ . '/..' . '/slim/slim/Slim/MiddlewareDispatcher.php',
        'Slim\\Middleware\\BodyParsingMiddleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/BodyParsingMiddleware.php',
        'Slim\\Middleware\\ContentLengthMiddleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/ContentLengthMiddleware.php',
        'Slim\\Middleware\\ErrorMiddleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/ErrorMiddleware.php',
        'Slim\\Middleware\\MethodOverrideMiddleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/MethodOverrideMiddleware.php',
        'Slim\\Middleware\\OutputBufferingMiddleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/OutputBufferingMiddleware.php',
        'Slim\\Middleware\\RoutingMiddleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/RoutingMiddleware.php',
        'Slim\\Psr7\\Cookies' => __DIR__ . '/..' . '/slim/psr7/src/Cookies.php',
        'Slim\\Psr7\\Environment' => __DIR__ . '/..' . '/slim/psr7/src/Environment.php',
        'Slim\\Psr7\\Factory\\RequestFactory' => __DIR__ . '/..' . '/slim/psr7/src/Factory/RequestFactory.php',
        'Slim\\Psr7\\Factory\\ResponseFactory' => __DIR__ . '/..' . '/slim/psr7/src/Factory/ResponseFactory.php',
        'Slim\\Psr7\\Factory\\ServerRequestFactory' => __DIR__ . '/..' . '/slim/psr7/src/Factory/ServerRequestFactory.php',
        'Slim\\Psr7\\Factory\\StreamFactory' => __DIR__ . '/..' . '/slim/psr7/src/Factory/StreamFactory.php',
        'Slim\\Psr7\\Factory\\UploadedFileFactory' => __DIR__ . '/..' . '/slim/psr7/src/Factory/UploadedFileFactory.php',
        'Slim\\Psr7\\Factory\\UriFactory' => __DIR__ . '/..' . '/slim/psr7/src/Factory/UriFactory.php',
        'Slim\\Psr7\\Header' => __DIR__ . '/..' . '/slim/psr7/src/Header.php',
        'Slim\\Psr7\\Headers' => __DIR__ . '/..' . '/slim/psr7/src/Headers.php',
        'Slim\\Psr7\\Interfaces\\HeadersInterface' => __DIR__ . '/..' . '/slim/psr7/src/Interfaces/HeadersInterface.php',
        'Slim\\Psr7\\Message' => __DIR__ . '/..' . '/slim/psr7/src/Message.php',
        'Slim\\Psr7\\NonBufferedBody' => __DIR__ . '/..' . '/slim/psr7/src/NonBufferedBody.php',
        'Slim\\Psr7\\Request' => __DIR__ . '/..' . '/slim/psr7/src/Request.php',
        'Slim\\Psr7\\Response' => __DIR__ . '/..' . '/slim/psr7/src/Response.php',
        'Slim\\Psr7\\Stream' => __DIR__ . '/..' . '/slim/psr7/src/Stream.php',
        'Slim\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/slim/psr7/src/UploadedFile.php',
        'Slim\\Psr7\\Uri' => __DIR__ . '/..' . '/slim/psr7/src/Uri.php',
        'Slim\\ResponseEmitter' => __DIR__ . '/..' . '/slim/slim/Slim/ResponseEmitter.php',
        'Slim\\Routing\\Dispatcher' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/Dispatcher.php',
        'Slim\\Routing\\FastRouteDispatcher' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/FastRouteDispatcher.php',
        'Slim\\Routing\\Route' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/Route.php',
        'Slim\\Routing\\RouteCollector' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteCollector.php',
        'Slim\\Routing\\RouteCollectorProxy' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteCollectorProxy.php',
        'Slim\\Routing\\RouteContext' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteContext.php',
        'Slim\\Routing\\RouteGroup' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteGroup.php',
        'Slim\\Routing\\RouteParser' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteParser.php',
        'Slim\\Routing\\RouteResolver' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteResolver.php',
        'Slim\\Routing\\RouteRunner' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteRunner.php',
        'Slim\\Routing\\RoutingResults' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RoutingResults.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Symfony\\Polyfill\\Php80\\PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/PhpToken.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7819d6e69eb13e4586086d4c066a5fec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7819d6e69eb13e4586086d4c066a5fec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7819d6e69eb13e4586086d4c066a5fec::$classMap;

        }, null, ClassLoader::class);
    }
}
