Correto. Isso precisa estar muito claro no README. Segue o README ajustado com essa informação:

---

# libphonenumber-for-php (BR Fork)

[![License](https://img.shields.io/badge/license-Apache%202.0-blue.svg)](LICENSE)

## Sobre

Este projeto é um fork da biblioteca [giggsey/libphonenumber-for-php](https://github.com/giggsey/libphonenumber-for-php), baseado na versão **8.13.55**.

O objetivo deste fork é:

* Manter compatibilidade com **PHP 7**.
* Focar em atualizações, correções e melhorias específicas para **números do Brasil (BR)**.
* Realizar manutenção e pequenos ajustes necessários para uso em sistemas legados que ainda utilizam PHP 7.

## Drop-in Replacement

> Este projeto é um **drop-in replacement** para o pacote `giggsey/libphonenumber-for-php`.

* Usa o **mesmo namespace** (`libphonenumber`).
* Código, classes e interfaces permanecem iguais.
* Para utilizá-lo, é necessário **remover o pacote original** do seu `composer.json` e instalar este fork no lugar.

Exemplo:

```bash
composer remove giggsey/libphonenumber-for-php
composer require seuvendor/libphonenumber
```

> Após isso, não é necessário alterar nenhum `use`, namespace ou código da sua aplicação.

## Aviso

Este projeto **não é afiliado, endossado ou mantido pelos autores originais** do projeto `giggsey/libphonenumber-for-php` nem pelo projeto oficial `libphonenumber` do Google. Trata-se de uma iniciativa independente para manutenção em contexto específico.

## Instalação

Via Composer:

```bash
composer require gustavohmbarbosa/libphonenumber7
```

## Requisitos

* PHP **>=7.0**
* Extensões padrão do PHP (`mbstring`, `intl` recomendada)

## Uso básico

```php
<?php

use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberFormat;

require 'vendor/autoload.php';

$phoneUtil = PhoneNumberUtil::getInstance();

try {
    $numberProto = $phoneUtil->parse("(11) 91234-5678", "BR");
    if ($phoneUtil->isValidNumber($numberProto)) {
        echo $phoneUtil->format($numberProto, PhoneNumberFormat::E164);
    } else {
        echo "Número inválido";
    }
} catch (\libphonenumber\NumberParseException $e) {
    echo "Erro ao processar número: " . $e->getMessage();
}
```

## Foco deste fork

* Correções e ajustes específicos para numeração brasileira.
* Atualização contínua dos dados de prefixos, operadoras e validações do Brasil.
* Manutenção da compatibilidade com projetos legados rodando PHP 7.

## Contribuição

Contribuições são bem-vindas, especialmente em relação a:

* Dados e regras atualizadas para telefonia no Brasil.
* Correções de bugs.
* Melhorias de performance.

Abra uma **issue** ou envie um **pull request**.

## Licença

Licenciado sob a [Licença Apache 2.0](LICENSE). Consulte o arquivo para mais informações.
