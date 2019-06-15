# Trip Bus

Trip Bus é um sistema em MVC criado na framework PHP Symfony, que tem como função visualizar os dados de uma API, assim como ver os detalhes de cada viagem.

## Requerimentos

Este projeto requer a instalação do `Yarn` e `Composer`.

## Instalação

- Clone o respositório: `git clone https://github.com/gustavofournier/trip-bus`
- Instale as dependências do Symfony: `composer install`
- Instale as dependências pelo Yarn: `yarn install`
- Para dar build na aplicação (Webpack Encore): `yarn encore production`
- Por fim, inicie o servidor: `symfony server:start`

## Utilização

Para entrar na aplicação, basta acessar:
```
http://localhost:8000
```

Ao solicitar esta página para o servidor, o mesmo consulta uma API de viagens de ônibus e estrutura o HTML de acordo com as informações recebidas, enviando de volta para o cliente logo em seguida.

Quando o usuário clica em um dos cards de viagem, a própria máquina do usuário faz uma segunda requisição à API em busca de detalhes de acentos e disponbilidade. Quando a resposta é recebida (através de um JSON), são criados elementos HTML e automaticamente o CSS que já estava na máquina do cliente monta a visualização desses elementos.

## Ferramentas utilizadas
Ferramentas que foram utilizadas para criar e testar o projeto:

- Synfony
- PHP
- Guzzle
- Webpack Encore
- Normalize.css
- JQuery
- Postman

## Autor

Esse projeto foi criado por [Gustavo Fournier](https://github.com/gustavofournier).
