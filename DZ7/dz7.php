<?php

1. Найти и указать в проекте Front Controller и расписать классы, которые с ним взаимодействуют.

Front Controller - \web\index.php

// <?php

// use Symfony\Component\DependencyInjection\ContainerBuilder;
// use Symfony\Component\HttpFoundation\Request;

// require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// $request = Request::createFromGlobals();
// $containerBuilder = new ContainerBuilder();

// Framework\Registry::addContainer($containerBuilder);

// $response = (new Kernel($containerBuilder))->handle($request);
// $response->send();

Взаимодействует с классами:
/crc/controller/UserController.php
/crc/controller/OrderController.php
/crc/controllerProductController.php
app/kernel.php

2. Найти в проекте паттерн Registry и объяснить, почему он был применён.

паттерн Registry - app/framework/registry.php

// <?php

// declare(strict_types = 1);

// namespace Framework;

// use Symfony\Component\DependencyInjection\ContainerBuilder;
// use Symfony\Component\Routing\Generator\UrlGenerator;
// use Symfony\Component\Routing\RequestContext;
// use Symfony\Component\Routing\RouteCollection;

// class Registry
// {
//     /**
//      * @var ContainerBuilder
//      */
//     private static $containerBuilder;

//     /**
//      * Добавляем контейнер для работы реестра
//      *
//      * @param ContainerBuilder $containerBuilder
//      * @return void
//      */
//     public static function addContainer(ContainerBuilder $containerBuilder): void
//     {
//         static::$containerBuilder = $containerBuilder;
//     }

//     /**
//      * Получаем данные из конфигурационного файла
//      *
//      * @param string $name
//      * @return mixed
//      */
//     public static function getDataConfig(string $name)
//     {
//         if (!static::$containerBuilder->hasParameter($name)) {
//             throw new \InvalidArgumentException('Unknown config variable ' . $name);
//         }

//         return static::$containerBuilder->getParameter($name);
//     }

//     /**
//      * Рендерим страницу по названию роута
//      *
//      * @param string name
//      * @param array $parameters
//      * @return string
//      */
//     public static function getRoute(string $name, array $parameters = []): string
//     {
//         /** @var RouteCollection $routeCollection */
//         $routeCollection = static::$containerBuilder->get('route_collection');

//         $urlGenerator = new UrlGenerator($routeCollection, new RequestContext());
//         try {
//             return $urlGenerator->generate($name, $parameters);
//         } catch (\Exception $e) {
//             throw new \InvalidArgumentException('Unknown route name ' . $name);
//         }
//     }
// }

Создается контейнер. В него складываются данные. Обеспечивается возможность доступа 
к этим данным из других частей программы.


3. Добавить во все классы Repository использование паттерна Identity Map вместо постоянного генерирования сущностей.


src/Model/Repository/Product.php

<?php

declare(strict_types = 1);

namespace Model\Repository;

use Model\Entity;

class Product
{
    private $identityMap = [];

    public function add($productList $ids )
    {
        $productList = [];
        foreach ($this->getDataFromSource() as $item) {
            $productList[] = new Entity\Product($item['id'], $item['name'], $item['price']);
        }

        $this->identityMap[$ids] = $productList; 
        
        // return $productList;
    }


    /**
     * Поиск продуктов по массиву id
     *
     * @param int[] $ids
     * @return Entity\Product[]
     */
    public function search(array $ids = []): array
    {
        if (!count($ids)) {
            return [];
        }

        $productList = [];
        foreach ($this->getDataFromSource(['id' => $ids]) as $item) {
            $productList[] = $identityMap[$ids]);
        }

        return $productList;
    }

    /**
     * Получаем все продукты
     *
     * @return Entity\Product[]
     */
    public function fetchAll(): array
    {
        $productList = [];
        foreach ($this->getDataFromSource() as $item) {
            $productList[] = $isentityMap[$ids]);
        }

        return $productList;
    }

    /**
     * Получаем продукты из источника данных
     *
     * @param array $search
     *
     * @return array
     */
    private function getDataFromSource(array $search = [])
    {
        $dataSource = [
            [
                'id' => 1,
                'name' => 'PHP',
                'price' => 15300,
            ],
            [
                'id' => 2,
                'name' => 'Python',
                'price' => 20400,
            ],
            [
                'id' => 3,
                'name' => 'C#',
                'price' => 30100,
            ],
            [
                'id' => 4,
                'name' => 'Java',
                'price' => 30600,
            ],
            [
                'id' => 5,
                'name' => 'Ruby',
                'price' => 18600,
            ],
            [
                'id' => 8,
                'name' => 'Delphi',
                'price' => 8400,
            ],
            [
                'id' => 9,
                'name' => 'C++',
                'price' => 19300,
            ],
            [
                'id' => 10,
                'name' => 'C',
                'price' => 12800,
            ],
            [
                'id' => 11,
                'name' => 'Lua',
                'price' => 5000,
            ],
        ];

        if (!count($search)) {
            return $dataSource;
        }

        $productFilter = function (array $dataSource) use ($search): bool {
            return in_array($dataSource[key($search)], current($search), true);
        };

        return array_filter($dataSource, $productFilter);
    }
}