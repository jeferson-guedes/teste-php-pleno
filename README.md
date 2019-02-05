# Teste PHP Pleno na Multiverse
Teste de vaga para Desenvolvedor Pleno

# Desafio

### Diretivas
O desafio está todo implementado em PHPUnit, para poder verificar os testes veja abaixo os passos:

1. Tenha o php em console, juntamente com o Composer.
2. clone(ou se preferir forke) o projeto e execute: composer install

Para rodar o teste:
```
vendor/bin/phpunit test --colors
```

Obs: Não mexer nos testes, mexa nas implementações em `app/` se houver alteração nos testes você será desclassificado, na dúvida entre em contato com o email informado ao final.


#### Faça o teste rodar implementando a lógica de limpeza de dados para evitar entrada de ataques XSS.

1. Inclua os typing hintings(scalars e classes) devidos em todos os métodos.

2. Faça os testes de limpeza de tags passarem removendo strings do texto, analise o teste ex: 

```
'text<script>' deverá virar 'text'
```

3. Faça o ultimo teste passar criando a classe *NumberFilter* e implementando a limpeza de numeros.
```
'text12345 1234 2.34' deverá virar 'text'
```

4. Implemente um solução para que seja padronizados os métodos e mais filtros possam ser criados no futuro, qual técnica de Engenharia de Software pode ser aplicada no componente Filtro?(optativa)

#### Conclusão
Se você realizou o forke do projeto, me envie o link caso preferir envie o desafio em formato zip.

O desafio concluido deverá ser mandado para: leonardotumadjian@multiversemkt.com

**Boa sorte**
