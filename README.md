<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Api criada na versão 8 do framework laravel

## Cadastro de cliente.

Um cliente deve possuir cpf, nome, data de nascimento e sexo(masculino,
feminino).
Cada cliente pode possuir endereços.
Um endereço possui endereço obrigatoriamente, UF obrigatoriamente, e cidade obrigatoriamente.

## Objetivo:
### Desenvolver sistema para cadastro de clientes e endereços com as
funcionalidades:
Exibição, inclusão, edição e exclusão de clientes.
Exibição, inclusão, edição e exclusão de endereços de clientes.

## Observação:
A remoção de clientes é independente da existência de endereços, caso um
cliente
seja excluído seus endereços devem ser apagados também.

## Funcionalidades:
Cadastrar um cliente somente quando o nome, data de nascimento e sexo
estiverem preenchidos.

Visualizar os clientes e seus dados.

Editar um cliente seguindo as regras dos seus atributos.

Excluir um cliente.

Cadastrar endereços no cliente seguindo as obrigatoriedades dos atributos
de
endereço.

Visualizar os endereços de um cliente.
Editar o endereço de um cliente seguindo as regras de seus atributos.

Excluir endereços de um cliente.

## Rodar o projeto

### Clone o repositório:
```
git clone https://github.com/thig7179/api-cadastro-clientes.git api-cadastro-clientes
```

### Acesse o projeto:
```
cd api-cadastro-clientes
```

### Gere o .env:
```
cp .env.example .env && php artisan key:generate
---------------------------------
No .env atribua o nome da base mysql em DB_DATABASE
```

### Instale as dependências do projeto:
```
composer install
npm install
```

### Rode o projeto:
```
php artisan serve
```

## [Respositório do front](https://github.com/thig7179/cliente_crud_reactjs-main).
