# Documentação do Projeto OSFacil

## 1. Descrição do Projeto

### 1.1 Visão Geral
O **OSFacil** é um sistema web de gerenciamento de Ordens de Serviço desenvolvido para facilitar o controle e acompanhamento de manutenções e reparos de aparelhos eletrônicos. O sistema foi desenvolvido como parte do projeto de curricularização do curso, utilizando tecnologias modernas e boas práticas de desenvolvimento.

### 1.2 Objetivo
Proporcionar uma solução completa e intuitiva para pequenas e médias empresas que trabalham com assistência técnica, permitindo o gerenciamento eficiente de clientes, vendedores/técnicos, produtos/serviços e ordens de serviço.

### 1.3 Tecnologias Utilizadas
- **Backend**: PHP 8.4.8
- **Framework**: Leaf MVC v4 + Leaf v4
- **Banco de Dados**: SQLite
- **Template Engine**: Blade
- **Gerenciamento de Dependências**: Composer
- **Biblioteca PDF**: DomPDF
- **Servidor de Desenvolvimento**: PHP Built-in Server

### 1.4 Contexto de Uso
O sistema foi projetado para ser utilizado por empresas de assistência técnica que necessitam:
- Controlar entrada e saída de aparelhos para manutenção
- Gerenciar informações de clientes e técnicos
- Acompanhar o status de serviços em andamento
- Gerar documentação (PDF) das ordens de serviço
- Manter histórico de atendimentos

---

## 2. Requisitos Funcionais

### RF001 - Gerenciamento de Clientes
**Descrição**: O sistema deve permitir o cadastro, visualização e gerenciamento de clientes.

**Critérios de Aceitação**:
- Cadastrar novos clientes com informações: nome, telefone, e-mail, endereço e observações
- Listar todos os clientes cadastrados
- Armazenar data de criação automaticamente
- Validar campos obrigatórios (nome)

### RF002 - Gerenciamento de Vendedores/Técnicos
**Descrição**: O sistema deve permitir o cadastro e visualização de vendedores/técnicos.

**Critérios de Aceitação**:
- Cadastrar vendedores com: nome, telefone, e-mail, CPF, data de admissão e observações
- Listar todos os vendedores cadastrados
- Validar campos obrigatórios (nome, telefone, CPF, data de admissão)
- Armazenar timestamps de criação e atualização

### RF003 - Gerenciamento de Produtos e Serviços
**Descrição**: O sistema deve permitir o cadastro de produtos e serviços oferecidos.

**Critérios de Aceitação**:
- Cadastrar itens do tipo "produto" ou "serviço"
- Informações: nome, tipo, descrição, preço, estoque (opcional)
- Validar tipo (apenas "produto" ou "serviço")
- Controle de estoque para produtos

### RF004 - Criação de Ordens de Serviço
**Descrição**: O sistema deve permitir a criação de ordens de serviço vinculadas a clientes e vendedores.

**Critérios de Aceitação**:
- Vincular OS a um cliente cadastrado
- Vincular OS a um vendedor/técnico responsável
- Registrar: contato, aparelho, problema relatado, serviço a realizar, valor, status
- Registrar datas de entrada e saída (prevista/realizada)
- Gerar ID único automaticamente

### RF005 - Listagem de Ordens de Serviço
**Descrição**: O sistema deve exibir todas as ordens de serviço cadastradas.

**Critérios de Aceitação**:
- Listar OS com informações: ID, nome do cliente, nome do vendedor, aparelho, status
- Ordenar por ID decrescente (mais recentes primeiro)
- Utilizar JOIN para exibir nomes ao invés de IDs

### RF006 - Exclusão de Ordens de Serviço
**Descrição**: O sistema deve permitir a exclusão de ordens de serviço.

**Critérios de Aceitação**:
- Permitir exclusão por ID
- Confirmar operação antes de deletar
- Remover permanentemente do banco de dados

### RF007 - Exportação de OS em PDF
**Descrição**: O sistema deve gerar documentos PDF das ordens de serviço.

**Critérios de Aceitação**:
- Gerar PDF individual por OS
- Incluir todas as informações da OS
- Incluir dados do cliente e vendedor
- Formato profissional e legível

### RF008 - Interface de Navegação
**Descrição**: O sistema deve fornecer uma interface intuitiva com menu de navegação.

**Critérios de Aceitação**:
- Menu principal com acesso a todas as funcionalidades
- Navegação entre: Dashboard, Clientes, Vendedores, Produtos, Ordens de Serviço
- Interface responsiva e moderna

---

## 3. Requisitos Não Funcionais

### RNF001 - Usabilidade
**Descrição**: O sistema deve ser intuitivo e fácil de usar.
- Interface limpa e organizada
- Feedback visual para ações do usuário
- Formulários com validação em tempo real
- Mensagens de erro claras e objetivas

### RNF002 - Performance
**Descrição**: O sistema deve ter boa performance.
- Tempo de resposta inferior a 2 segundos para operações comuns
- Otimização de consultas ao banco de dados
- Carregamento rápido de páginas

### RNF003 - Portabilidade
**Descrição**: O sistema deve ser executável em diferentes ambientes.
- Compatível com Windows, Linux e macOS
- Requer apenas PHP 7.4+ e Composer
- Banco de dados SQLite (arquivo local, sem servidor)

### RNF004 - Manutenibilidade
**Descrição**: O código deve ser fácil de manter e evoluir.
- Arquitetura MVC bem definida
- Código organizado e comentado
- Separação de responsabilidades
- Uso de PSR (PHP Standards Recommendations)

### RNF005 - Confiabilidade
**Descrição**: O sistema deve ser confiável e consistente.
- Validação de dados em todas as entradas
- Tratamento adequado de erros
- Integridade referencial no banco de dados
- Backup fácil (arquivo único SQLite)

### RNF006 - Segurança
**Descrição**: O sistema deve implementar medidas básicas de segurança.
- Validação de inputs para prevenir SQL Injection
- Uso de prepared statements
- Proteção contra XSS (Cross-Site Scripting)
- Validação de tipos de dados

### RNF007 - Escalabilidade
**Descrição**: O sistema deve permitir crescimento futuro.
- Estrutura modular para adicionar novas funcionalidades
- Possibilidade de migração para outros bancos de dados
- Arquitetura preparada para autenticação de usuários

### RNF008 - Disponibilidade
**Descrição**: O sistema deve estar disponível durante o horário comercial.
- Tempo de atividade mínimo de 95%
- Recuperação rápida em caso de falhas
- Backup periódico dos dados

---

## 4. Casos de Uso

### UC001 - Cadastrar Cliente
**Ator Principal**: Atendente/Gerente

**Pré-condições**: Sistema iniciado e acessível

**Fluxo Principal**:
1. Usuário acessa a tela de cadastro de clientes
2. Sistema exibe formulário de cadastro
3. Usuário preenche os dados: nome, telefone, e-mail, endereço e observações
4. Usuário submete o formulário
5. Sistema valida os dados
6. Sistema salva o cliente no banco de dados
7. Sistema exibe mensagem de sucesso
8. Sistema retorna à listagem de clientes

**Fluxos Alternativos**:
- **FA001**: Dados inválidos
  - 5a. Sistema identifica campos obrigatórios vazios
  - 5b. Sistema exibe mensagens de erro específicas
  - 5c. Retorna ao passo 3

**Pós-condições**: Cliente cadastrado no sistema

---

### UC002 - Listar Clientes
**Ator Principal**: Atendente/Gerente

**Pré-condições**: Sistema iniciado

**Fluxo Principal**:
1. Usuário acessa a opção "Listar Clientes"
2. Sistema busca todos os clientes cadastrados
3. Sistema exibe lista com: nome, telefone, e-mail, endereço
4. Usuário visualiza a listagem

**Fluxos Alternativos**:
- **FA001**: Nenhum cliente cadastrado
  - 2a. Sistema identifica que não há clientes
  - 2b. Sistema exibe mensagem informativa
  - 2c. Sistema oferece opção de cadastrar novo cliente

**Pós-condições**: Lista de clientes exibida

---

### UC003 - Cadastrar Vendedor/Técnico
**Ator Principal**: Gerente/Administrador

**Pré-condições**: Sistema iniciado e acessível

**Fluxo Principal**:
1. Usuário acessa a tela de cadastro de vendedores
2. Sistema exibe formulário de cadastro
3. Usuário preenche: nome, telefone, e-mail, CPF, data de admissão, observações
4. Usuário submete o formulário
5. Sistema valida os dados
6. Sistema salva o vendedor no banco de dados
7. Sistema exibe mensagem de sucesso
8. Sistema retorna à listagem de vendedores

**Fluxos Alternativos**:
- **FA001**: CPF inválido
  - 5a. Sistema valida formato do CPF
  - 5b. Sistema exibe erro de validação
  - 5c. Retorna ao passo 3
- **FA002**: CPF duplicado
  - 5a. Sistema verifica unicidade do CPF
  - 5b. Sistema exibe mensagem de CPF já cadastrado
  - 5c. Retorna ao passo 3

**Pós-condições**: Vendedor/técnico cadastrado no sistema

---

### UC004 - Listar Vendedores
**Ator Principal**: Gerente/Atendente

**Pré-condições**: Sistema iniciado

**Fluxo Principal**:
1. Usuário acessa a opção "Listar Vendedores"
2. Sistema busca todos os vendedores cadastrados
3. Sistema exibe lista com: nome, telefone, e-mail, CPF, data de admissão
4. Usuário visualiza a listagem

**Pós-condições**: Lista de vendedores exibida

---

### UC005 - Cadastrar Produto/Serviço
**Ator Principal**: Gerente

**Pré-condições**: Sistema iniciado e acessível

**Fluxo Principal**:
1. Usuário acessa a tela de cadastro de produtos
2. Sistema exibe formulário de cadastro
3. Usuário seleciona o tipo (produto ou serviço)
4. Usuário preenche: nome, descrição, preço
5. Se tipo = "produto", usuário informa quantidade em estoque
6. Usuário submete o formulário
7. Sistema valida os dados
8. Sistema salva no banco de dados
9. Sistema exibe mensagem de sucesso

**Fluxos Alternativos**:
- **FA001**: Preço inválido
  - 7a. Sistema valida formato numérico do preço
  - 7b. Sistema exibe erro
  - 7c. Retorna ao passo 3

**Pós-condições**: Produto/serviço cadastrado no sistema

---

### UC006 - Criar Ordem de Serviço
**Ator Principal**: Atendente

**Pré-condições**: 
- Sistema iniciado
- Pelo menos um cliente cadastrado
- Pelo menos um vendedor/técnico cadastrado

**Fluxo Principal**:
1. Usuário acessa a tela de criação de OS
2. Sistema exibe formulário com listas de clientes e vendedores
3. Usuário seleciona o cliente
4. Usuário seleciona o vendedor/técnico responsável
5. Usuário preenche: contato, aparelho, problema relatado
6. Usuário informa serviço a realizar e valor estimado
7. Usuário define status inicial (ex: "Aguardando", "Em Andamento")
8. Usuário informa data de entrada
9. Usuário submete o formulário
10. Sistema valida os dados
11. Sistema gera ID único para a OS
12. Sistema salva a OS no banco de dados
13. Sistema exibe mensagem de sucesso com número da OS

**Fluxos Alternativos**:
- **FA001**: Campos obrigatórios vazios
  - 10a. Sistema identifica campos não preenchidos
  - 10b. Sistema exibe mensagens de erro
  - 10c. Retorna ao passo 3

**Pós-condições**: Ordem de serviço criada e salva no sistema

---

### UC007 - Listar Ordens de Serviço
**Ator Principal**: Atendente/Gerente/Técnico

**Pré-condições**: Sistema iniciado

**Fluxo Principal**:
1. Usuário acessa a opção "Listar OS"
2. Sistema busca todas as OS cadastradas
3. Sistema realiza JOIN com tabelas de clientes e vendedores
4. Sistema ordena por ID decrescente (mais recentes primeiro)
5. Sistema exibe lista com: ID, cliente, vendedor, aparelho, status
6. Usuário visualiza a listagem

**Fluxos Alternativos**:
- **FA001**: Nenhuma OS cadastrada
  - 2a. Sistema identifica que não há OS
  - 2b. Sistema exibe mensagem informativa
  - 2c. Sistema oferece opção de criar nova OS

**Pós-condições**: Lista de ordens de serviço exibida

---

### UC008 - Exportar OS em PDF
**Ator Principal**: Atendente/Gerente

**Pré-condições**: 
- Sistema iniciado
- Ordem de serviço cadastrada

**Fluxo Principal**:
1. Usuário visualiza listagem de OS
2. Usuário clica em "Exportar PDF" de uma OS específica
3. Sistema busca dados completos da OS (incluindo cliente e vendedor)
4. Sistema gera documento PDF formatado
5. Sistema disponibiliza download do arquivo
6. Usuário salva ou abre o PDF

**Fluxos Alternativos**:
- **FA001**: Erro na geração do PDF
  - 4a. Sistema detecta erro na biblioteca DomPDF
  - 4b. Sistema exibe mensagem de erro
  - 4c. Sistema registra log do erro

**Pós-condições**: PDF da ordem de serviço gerado e disponibilizado

---

### UC009 - Excluir Ordem de Serviço
**Ator Principal**: Gerente

**Pré-condições**: 
- Sistema iniciado
- Ordem de serviço cadastrada

**Fluxo Principal**:
1. Usuário visualiza listagem de OS
2. Usuário seleciona opção "Excluir" de uma OS específica
3. Sistema solicita confirmação da exclusão
4. Usuário confirma a operação
5. Sistema remove a OS do banco de dados
6. Sistema exibe mensagem de sucesso
7. Sistema atualiza a listagem

**Fluxos Alternativos**:
- **FA001**: Usuário cancela exclusão
  - 4a. Usuário clica em "Cancelar"
  - 4b. Sistema mantém a OS
  - 4c. Sistema retorna à listagem

**Pós-condições**: Ordem de serviço removida do sistema

---

### UC010 - Visualizar Dashboard
**Ator Principal**: Gerente/Atendente

**Pré-condições**: Sistema iniciado

**Fluxo Principal**:
1. Usuário acessa a página inicial
2. Sistema exibe dashboard com visão geral
3. Sistema pode apresentar:
   - Total de OS ativas
   - OS por status
   - Últimas OS criadas
   - Estatísticas gerais
4. Usuário visualiza as informações

**Pós-condições**: Dashboard exibido com informações atualizadas

---

## 5. Modelo de Dados

### 5.1 Entidades Principais

#### Tabela: clientes
| Campo | Tipo | Descrição | Restrições |
|-------|------|-----------|------------|
| id | INTEGER | Identificador único | PRIMARY KEY, AUTOINCREMENT |
| nome | TEXT | Nome do cliente | NOT NULL |
| telefone | TEXT | Telefone de contato | - |
| email | TEXT | E-mail do cliente | - |
| endereco | TEXT | Endereço completo | - |
| observacoes | TEXT | Observações adicionais | - |
| criado_em | DATETIME | Data/hora de criação | DEFAULT CURRENT_TIMESTAMP |

---

#### Tabela: vendedores
| Campo | Tipo | Descrição | Restrições |
|-------|------|-----------|------------|
| id | INTEGER | Identificador único | PRIMARY KEY, AUTOINCREMENT |
| nome | TEXT | Nome do vendedor/técnico | NOT NULL |
| telefone | TEXT | Telefone de contato | NOT NULL |
| email | TEXT | E-mail | - |
| cpf | TEXT | CPF | NOT NULL |
| admissao | DATE | Data de admissão | NOT NULL |
| observacoes | TEXT | Observações | - |
| criado_em | DATETIME | Data/hora de criação | DEFAULT CURRENT_TIMESTAMP |
| atualizado_em | DATETIME | Data/hora da última atualização | DEFAULT CURRENT_TIMESTAMP |

---

#### Tabela: produtos
| Campo | Tipo | Descrição | Restrições |
|-------|------|-----------|------------|
| id | INTEGER | Identificador único | PRIMARY KEY, AUTOINCREMENT |
| nome | TEXT | Nome do produto/serviço | NOT NULL |
| tipo | TEXT | Tipo: 'produto' ou 'servico' | CHECK(tipo IN ('produto','servico')), NOT NULL |
| descricao | TEXT | Descrição detalhada | - |
| preco | REAL | Preço unitário | NOT NULL |
| estoque | INTEGER | Quantidade em estoque | DEFAULT NULL |
| criado_em | DATETIME | Data/hora de criação | DEFAULT CURRENT_TIMESTAMP |
| atualizado_em | DATETIME | Data/hora da última atualização | DEFAULT CURRENT_TIMESTAMP |

---

#### Tabela: os (Ordens de Serviço)
| Campo | Tipo | Descrição | Restrições |
|-------|------|-----------|------------|
| id | INTEGER | Identificador único | PRIMARY KEY, AUTOINCREMENT |
| cliente_id | INTEGER | ID do cliente | FOREIGN KEY → clientes(id) |
| vendedor_id | INTEGER | ID do vendedor/técnico | FOREIGN KEY → vendedores(id) |
| contato | TEXT | Contato para esta OS | NOT NULL |
| aparelho | TEXT | Aparelho a ser consertado | NOT NULL |
| problema | TEXT | Problema relatado | NOT NULL |
| servico | TEXT | Serviço a ser realizado | - |
| valor | REAL | Valor do serviço | - |
| status | TEXT | Status atual da OS | - |
| data_entrada | DATE | Data de entrada do aparelho | - |
| data_saida | DATE | Data de saída do aparelho | - |
| criado_em | DATETIME | Data/hora de criação | DEFAULT CURRENT_TIMESTAMP |

---

### 5.2 Relacionamentos

```
clientes (1) -------- (N) os
    Um cliente pode ter várias ordens de serviço
    Uma OS pertence a um único cliente

vendedores (1) -------- (N) os
    Um vendedor pode ser responsável por várias OS
    Uma OS tem um único vendedor responsável
```

---

## 6. Arquitetura do Sistema

### 6.1 Padrão MVC (Model-View-Controller)

**Models** (`app/models/`):
- `Cliente.php` - Lógica de negócio de clientes
- `Vendedor.php` - Lógica de negócio de vendedores
- `Produto.php` - Lógica de negócio de produtos/serviços
- `Ordem.php` - Lógica de negócio de ordens de serviço
- `User.php` - Gerenciamento de usuários (futuro)

**Views** (`app/views/`):
- `cliente.blade.php` - Formulário de cadastro de cliente
- `clienteListar.blade.php` - Listagem de clientes
- `vendedor.blade.php` - Formulário de cadastro de vendedor
- `vendedorListar.blade.php` - Listagem de vendedores
- `produto.blade.php` - Formulário de cadastro de produto
- `OS.blade.php` - Formulário de criação de OS
- `Oslistar.blade.php` - Listagem de OS
- `menu.blade.php` - Menu de navegação
- `index.blade.php` - Dashboard/página inicial

**Controllers** (`app/controllers/`):
- `UsersController.php` - Controlador principal das rotas
- `DatabasesController.php` - Gerenciamento do banco de dados

### 6.2 Fluxo de Requisição

```
1. Navegador → 2. Rota (routes/_app.php) → 3. Controller → 4. Model → 5. Banco de Dados
                                                    ↓
6. Navegador ← 5. View (Blade) ← 4. Controller ← Model
```

---

## 7. Instalação e Configuração

### 7.1 Pré-requisitos
- PHP 7.4 ou superior (recomendado: PHP 8.4+)
- Composer
- Git (para clonar o repositório)

### 7.2 Passos de Instalação

1. **Clonar o repositório**:
```bash
git clone [URL_DO_REPOSITORIO]
cd OSFacil
```

2. **Instalar dependências**:
```bash
composer install
```

3. **Configurar ambiente**:
```bash
# Windows
copy env .env

# Linux/Mac
cp env .env
```

4. **Iniciar servidor**:
```bash
leaf serve
```

5. **Acessar aplicação**:
   - Abrir navegador em: `http://localhost:5500`

### 7.3 Configuração do Banco de Dados

O banco de dados SQLite é criado automaticamente na primeira execução. O arquivo `osfacil.db` será gerado na raiz do projeto.

**Variáveis de ambiente (`.env`)**:
```env
APP_NAME=OSFacil
APP_ENV=local
APP_DEBUG=true
APP_PORT=5500
APP_URL=http://localhost:5500

DB_CONNECTION=sqlite
DB_DATABASE=database/osfacil.db
DB_CHARSET=utf8
DB_COLLATION=utf8_unicode_ci
```

---

## 8. Guia de Uso

### 8.1 Fluxo de Trabalho Típico

1. **Cadastro Inicial**:
   - Cadastrar vendedores/técnicos da empresa
   - Cadastrar produtos e serviços oferecidos

2. **Atendimento ao Cliente**:
   - Cadastrar novo cliente (se necessário)
   - Criar ordem de serviço vinculando cliente e técnico
   - Informar aparelho, problema e orçamento

3. **Acompanhamento**:
   - Listar OS para visualizar status
   - Atualizar status conforme progresso (futuro)
   - Exportar PDF para entrega ao cliente

4. **Finalização**:
   - Registrar data de saída
   - Gerar comprovante em PDF
   - Arquivar ou excluir OS antiga (se necessário)

---

## 9. Melhorias Futuras

### 9.1 Funcionalidades Planejadas
- [ ] Sistema de autenticação de usuários
- [ ] Diferentes níveis de permissão (Admin, Gerente, Atendente, Técnico)
- [ ] Edição de clientes, vendedores e OS
- [ ] Busca e filtros avançados nas listagens
- [ ] Dashboard com gráficos e estatísticas
- [ ] Histórico de alterações nas OS
- [ ] Notificações de OS atrasadas
- [ ] Sistema de pagamentos e controle financeiro
- [ ] Integração com WhatsApp para notificar clientes
- [ ] Backup automático do banco de dados
- [ ] Modo escuro (dark mode)
- [ ] Impressão de etiquetas para aparelhos

### 9.2 Melhorias Técnicas
- [ ] Migração para PostgreSQL ou MySQL
- [ ] API RESTful para integração com outros sistemas
- [ ] Testes automatizados (PHPUnit)
- [ ] CI/CD com GitHub Actions
- [ ] Docker para facilitar deploy
- [ ] Cache de consultas frequentes
- [ ] Log de auditoria

---

## 10. Equipe do Projeto

**Projeto de Curricularização - Banco de Dados**

- **Instituição**: [Nome da Instituição]
- **Curso**: [Nome do Curso]
- **Disciplina**: Banco de Dados
- **Período**: 2025

**Integrantes**:
- [Nome do Integrante 1]
- [Nome do Integrante 2]
- [Nome do Integrante 3]
- [Nome do Integrante 4]

**Orientador**: [Nome do Professor]

---

## 11. Referências

- **Leaf PHP Framework**: https://leafphp.dev/
- **Blade Template Engine**: https://laravel.com/docs/blade
- **SQLite**: https://www.sqlite.org/
- **DomPDF**: https://github.com/dompdf/dompdf
- **PHP Standards (PSR)**: https://www.php-fig.org/psr/

---

## 12. Licença

Este projeto foi desenvolvido para fins educacionais como parte do projeto de curricularização.

---

## 13. Anexos

### 13.1 Estrutura de Diretórios

```
OSFacil/
├── app/
│   ├── controllers/      # Controladores da aplicação
│   ├── database/         # Banco de dados e arquivos relacionados
│   ├── models/           # Modelos de dados
│   ├── routes/           # Definição de rotas
│   └── views/            # Templates Blade
├── public/               # Arquivos públicos
│   ├── assets/
│   │   ├── css/         # Estilos
│   │   ├── img/         # Imagens
│   │   └── js/          # Scripts JavaScript
│   └── index.php        # Ponto de entrada da aplicação
├── vendor/               # Dependências do Composer
├── .env                  # Configurações de ambiente
├── composer.json         # Dependências PHP
├── leaf                  # CLI do Leaf Framework
└── README.MD             # Documentação básica
```

### 13.2 Convenções de Código

- **Padrão PSR-12** para formatação de código PHP
- **CamelCase** para nomes de classes
- **snake_case** para nomes de tabelas e colunas
- **Blade** para templates com sintaxe `@directive`
- **Comentários** em português para facilitar manutenção

---

**Documento criado em**: 12 de Novembro de 2025
**Versão**: 1.0
**Status**: Em Desenvolvimento

