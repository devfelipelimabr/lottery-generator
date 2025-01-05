# Gerador de Números da Loteria

Uma aplicação web para gerar números aleatórios para jogos de loteria (Mega-Sena e Lotofácil), desenvolvida em PHP e JavaScript.

## Funcionalidades

- Geração de números aleatórios para diferentes jogos de loteria
- Interface amigável e responsiva
- Seleção personalizada da quantidade de números
- Validação de limites para cada jogo
- Exibição visual dos números gerados

## Requisitos

- PHP 8.1 ou superior
- Composer
- Servidor web (Apache/Nginx) ou PHP Built-in Server

## Estrutura do Projeto

```
lottery-generator/
├── src/
│   ├── Domain/
│   │   ├── Lottery/
│   │   │   ├── LotteryGame.php
│   │   │   ├── MegaSena.php
│   │   │   └── Lotofacil.php
│   │   └── Generator/
│   │       └── NumberGenerator.php
│   ├── Application/
│   │   └── LotteryService.php
│   └── Infrastructure/
│       └── Api/
│           └── LotteryController.php
├── public/
│   ├── app.php
│   ├── index.html
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── main.js
└── composer.json
```

## Instalação

1. Clone o repositório:

```bash
git clone https://github.com/devfelipelimabr/lottery-generator.git
cd lottery-generator
```

2. Instale as dependências via Composer:

```bash
composer install
```

3. Configure o servidor web:

   **Usando PHP Built-in Server:**

   ```bash
   php -S localhost:8000 -t public/
   ```

   **Usando Apache:**
   - Configure o DocumentRoot para a pasta `public/`
   - Certifique-se de que o mod_rewrite está habilitado
   - Permita o override no arquivo de configuração do Apache:

   ```apache
   <Directory /var/www/html/public>
       AllowOverride All
   </Directory>
   ```

## Uso

1. Acesse a aplicação no navegador:
   - Se estiver usando PHP Built-in Server: <http://localhost:8000>
   - Se estiver usando Apache/Nginx: conforme sua configuração

2. Selecione o jogo desejado (Mega-Sena ou Lotofácil)

3. Escolha a quantidade de números:
   - Mega-Sena: 6 a 15 números
   - Lotofácil: 15 a 20 números

4. Clique em "Gerar Números" para obter sua combinação

## Limites dos Jogos

### Mega-Sena

- Números disponíveis: 1 a 60
- Mínimo de números: 6
- Máximo de números: 15

### Lotofácil

- Números disponíveis: 1 a 25
- Mínimo de números: 15
- Máximo de números: 20

## Arquitetura

O projeto segue os princípios de Clean Architecture:

- **Domain**: Contém as regras de negócio e entidades
- **Application**: Implementa os casos de uso da aplicação
- **Infrastructure**: Lida com aspectos externos como API e persistência
- **Public**: Interface com o usuário e assets públicos

## Contribuindo

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`)
3. Faça commit das mudanças (`git commit -am 'Adiciona nova feature'`)
4. Faça push para a branch (`git push origin feature/nova-feature`)
5. Crie um Pull Request

## Segurança

- Validação de entrada tanto no frontend quanto no backend
- Sanitização de dados
- Tratamento de erros apropriado

## Melhorias Futuras

- [ ] Adicionar mais jogos de loteria
- [ ] Implementar histórico de números gerados
- [ ] Adicionar estatísticas de números mais/menos sorteados
- [ ] Permitir salvar jogos favoritos
- [ ] Adicionar testes automatizados

## Licença

Este projeto está licenciado sob a MIT License - veja o arquivo [LICENSE](LICENSE) para detalhes.

## Autor

Felipe Lima - [felipelima85@hotmail.com](mailto:felipelima85@hotmail.com)

## Agradecimentos

- Inspirado nos jogos oficiais da Caixa Econômica Federal
- Desenvolvedores da comunidade PHP
