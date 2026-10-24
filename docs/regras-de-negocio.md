# Regras de negócio e requisitos

## 1. Objetivo e limites

Este documento registra os requisitos fornecidos para um website de quiz de personalidade voltado a fãs de Percy Jackson e das demais sagas de Rick Riordan.

O participante responde a um questionário e recebe um resultado de afinidade ou filiação fictícia a uma ou mais divindades. O teste é exclusivamente recreativo e de identificação pessoal no contexto de um fã-clube. Não possui validade científica ou psicológica, nem deve apresentar seus resultados como diagnóstico ou verdade sobre o participante.

As regras identificadas como **RN** representam requisitos de negócio. Os requisitos **RQ** registram restrições de experiência, tecnologia e operação. As decisões pendentes ao final não constituem regras já aprovadas.

## 2. Atores e jornada

### Participante

1. Acessa o website em um navegador moderno, no celular ou computador.
2. Seleciona um panteão entre os disponíveis; inicialmente, o grego.
3. Acessa um questionário do panteão e responde às perguntas.
4. Recebe o resultado calculado a partir das características acumuladas.
5. Pode obter uma arte personalizada com seu nome e a divindade do resultado, além de imagem/link para compartilhamento.

A forma de seleção do questionário, quando houver vários no mesmo panteão, ainda precisa ser definida.

### Administrador

Acessa um painel com login protegido para gerenciar panteões, divindades, questionários, características, pesos e apresentação visual.

## 3. Panteões e divindades

| Identificador | Regra |
| --- | --- |
| RN-001 | O sistema deve permitir o cadastro de múltiplos panteões. |
| RN-002 | O panteão grego será a primeira opção disponível e a referência inicial para o projeto. |
| RN-003 | O conteúdo inicial deve contemplar todas as divindades maiores do panteão grego, incluindo exemplos como Zeus, Apolo, Hefesto, Poseidon e Atena. A lista completa depende de curadoria. |
| RN-004 | Cada panteão deve possuir pelo menos um questionário. |
| RN-005 | Cada divindade deve estar vinculada a um panteão e possuir um perfil de características utilizado no cálculo de afinidade. |
| RN-006 | O perfil de uma divindade deve permitir representar pontuações mínimas ou máximas de determinadas características. A combinação dessas condições será definida com a fórmula de cálculo. |
| RN-007 | O domínio deve distinguir divindades maiores e menores para permitir a interpretação dos resultados descrita na seção 5. |
| RN-008 | O sistema deve permitir associar símbolos às divindades e decoração temática aos panteões. |

Não se deve presumir que a lista de divindades maiores corresponde necessariamente a uma lista fechada de doze olimpianos: o catálogo definitivo ainda será validado.

## 4. Questionários, respostas e características

| Identificador | Regra |
| --- | --- |
| RN-009 | Um panteão pode ter múltiplos questionários. |
| RN-010 | Cada questionário deve conter pelo menos uma questão. |
| RN-011 | As questões devem ser de múltipla escolha, com quantidade variável de perguntas e alternativas. |
| RN-012 | Cada questão deve conter pelo menos três alternativas de resposta. |
| RN-013 | Cada resposta deve representar contribuições de pontuação para características de personalidade, podendo haver valores positivos ou negativos. |
| RN-014 | O cálculo deve considerar as contribuições das respostas do participante para formar suas pontuações por característica. |
| RN-015 | Características e pesos devem ser configuráveis, sem limitar o modelo ao exemplo de impulsividade. |
| RN-016 | Perguntas, alternativas, características e pesos definitivos serão fornecidos e ajustados posteriormente. Não integram esta definição inicial de conteúdo. |

### Exemplo conceitual

Uma pontuação alta em impulsividade aproxima o participante de Poseidon; uma pontuação baixa aproxima de Atena. Isso ilustra que uma mesma característica pode favorecer perfis distintos conforme sua pontuação.

O exemplo não define valores numéricos, limites, pesos finais ou uma regra universal para essas divindades.

A expressão “múltipla escolha” descreve o formato das alternativas; ainda é necessário decidir se cada pergunta admite uma única resposta ou várias seleções. Também permanecem pendentes a obrigatoriedade de todas as respostas e o tratamento de testes incompletos.

## 5. Pontuação e resultado

| Identificador | Regra |
| --- | --- |
| RN-017 | O resultado deve comparar as pontuações do participante com os perfis das divindades do panteão selecionado. |
| RN-018 | O resultado deve apresentar uma estimativa de afinidade, descrita pelo solicitante como probabilidade aproximada de filiação, para uma ou mais divindades. |
| RN-019 | Alta afinidade com uma divindade maior deve permitir um resultado simples, centrado nessa divindade. |
| RN-020 | Baixas afinidades distribuídas entre múltiplas divindades devem permitir indicar uma possível filiação a uma divindade menor do panteão. Essa indicação não equivale a uma identificação certa. |
| RN-021 | A apresentação deve deixar explícito o caráter recreativo das estimativas; eventuais percentuais não representam probabilidade estatística validada. |
| RN-022 | O resultado deve apresentar o símbolo da divindade selecionada, quando cadastrado, em harmonia com a temática do panteão. |

### Limites desta especificação

Ainda não estão definidos:

- A fórmula de comparação entre pontuações e perfis, incluindo a combinação de limites mínimos e máximos.
- A normalização entre questionários de tamanhos diferentes e o tratamento de pontuações negativas.
- Se os índices serão independentes ou uma distribuição cuja soma seja 100%.
- Os limiares de afinidade alta ou baixa e o critério de resultado simples.
- O desempate e a quantidade máxima de divindades exibidas.
- O mapeamento de resultados dispersos para divindades menores e o conteúdo exibido quando não houver perfil menor adequado.
- O tratamento de perfis sem características suficientes para comparação.

Não se deve implementar uma fórmula arbitrária como se essas decisões já estivessem aprovadas. A indicação de divindade menor não deve ser confundida com seleção aleatória sem critério definido.

## 6. Administração

| Identificador | Regra |
| --- | --- |
| RN-023 | O website deve possuir painel administrativo com login protegido. |
| RN-024 | O administrador deve poder cadastrar e customizar panteões e questionários. |
| RN-025 | O administrador deve poder gerenciar questões, alternativas e pesos das respostas por característica. |
| RN-026 | O administrador deve poder configurar os perfis das divindades utilizados no cálculo, incluindo limites por característica. |
| RN-027 | O administrador deve poder ajustar o estilo do website, suas decorações e os símbolos associados. |
| RN-028 | As configurações disponibilizadas aos participantes devem respeitar os mínimos de um questionário por panteão, uma questão por questionário e três alternativas por questão. |

A existência de rascunhos, publicação, histórico de alterações, exclusão de cadastros e múltiplos perfis administrativos permanece em aberto. Este documento não determina como permitir edições intermediárias sem expor configurações incompletas.

## 7. Compartilhamento e dados do participante

| Identificador | Regra |
| --- | --- |
| RN-029 | Ao concluir o teste, o participante deve ter acesso a uma arte personalizada com seu nome e a divindade selecionada pelo teste. |
| RN-030 | A mídia final deve conter indicação da origem do teste, como a URL do website. |
| RN-031 | O website deve fornecer imagem/link prontos para compartilhamento e utilizar o compartilhamento nativo do dispositivo quando disponível. |
| RN-032 | Não deve ser exigido login em mídias sociais para obter os recursos de compartilhamento. |
| RN-033 | WhatsApp e Instagram são exemplos de destinos desejados, sujeitos aos recursos de compartilhamento oferecidos pelo navegador, sistema operacional e aplicativo instalado. Não há exigência de publicação automática nesses serviços. |
| RN-034 | A persistência dos dados dos participantes não é prioridade do projeto. Não há requisito inicial de cadastro, conta social ou histórico pessoal de resultados. |

**RQ-001 — Compatibilidade de compartilhamento:** deve haver alternativa para obter a imagem ou copiar o link quando o compartilhamento nativo não estiver disponível ou não aceitar o formato produzido.

Permanecem pendentes a forma de obtenção do nome, seus limites e validações, a escolha da divindade para a arte em resultados múltiplos e o conteúdo do link compartilhado. Um link que reproduza um resultado individual pode exigir armazenamento ou codificação de dados; essa decisão deve considerar privacidade e a baixa prioridade de persistência.

## 8. Experiência, apresentação e desempenho

| Identificador | Requisito |
| --- | --- |
| RQ-002 | A interface deve ser responsiva e otimizada tanto para dispositivos móveis quanto para navegadores de computador. |
| RQ-003 | A compatibilidade deve se basear em padrões abertos da web, considerando navegadores modernos e atualizados. |
| RQ-004 | O desempenho é prioridade, com redução de JavaScript enviado e executado no dispositivo do participante. |
| RQ-005 | HTML e CSS devem ser preferidos para estilos, animações e interações sempre que atenderem aos requisitos de funcionamento e usabilidade. JavaScript não está proibido, mas seu uso deve ser justificado. |
| RQ-006 | Deve-se evitar frameworks JavaScript como React devido ao custo de memória e processamento no dispositivo do participante. |
| RQ-007 | A experiência deve considerar hospedagem em VPS possivelmente localizada na Europa e sujeita a latência significativa para o público. O desenho das páginas e interações deve minimizar o impacto dessa latência. |
| RQ-008 | A apresentação deve permitir animações e assets decorativos coerentes com o panteão selecionado; para o grego, símbolos e temática gregos. |
| RQ-009 | Decorações e animações não devem comprometer as prioridades de desempenho e usabilidade. |

Não foram definidos stack de backend, banco de dados, provedor de hospedagem, orçamento de tamanho de página ou metas numéricas de latência. A localização do workspace em uma pasta chamada `java` não determina a tecnologia do projeto.

## 9. Critérios de aceitação do escopo definido

1. O participante encontra o panteão grego como opção inicial e a estrutura admite cadastrar outros panteões sem redesenhar o domínio.
2. Uma configuração oferecida ao público respeita a cardinalidade mínima de panteões, questionários, questões e alternativas.
3. Respostas com contribuições positivas e negativas afetam as características correspondentes no cálculo.
4. A comparação considera os perfis das divindades do panteão escolhido; os testes numéricos dependem da aprovação da fórmula.
5. A apresentação contempla resultado simples, múltiplas afinidades e possível filiação menor, conforme critérios ainda a definir, sem afirmar validade científica.
6. O administrador autenticado consegue alterar os conteúdos, pesos, perfis e elementos visuais previstos; o painel não fica aberto a participantes sem autenticação.
7. O participante consegue obter a arte com nome, divindade e origem, sem login social, e dispõe de alternativa quando o compartilhamento nativo não funciona.
8. O fluxo principal funciona em celular e computador, com o mínimo necessário de JavaScript e sem tornar a decoração um obstáculo ao uso.

## 10. Decisões pendentes para implementação

Além das pendências detalhadas nas seções anteriores, será necessário validar:

- Catálogo inicial de divindades maiores e menores, características e símbolos.
- Conteúdo definitivo dos questionários e critérios de revisão das características.
- Política de edição de respostas, reinício do teste e comportamento ao atualizar ou abandonar a página.
- Efeito de mudanças administrativas sobre testes em andamento e resultados já compartilhados.
- Política de dados pessoais: eventual coleta, armazenamento, retenção e exposição de nomes ou resultados em links públicos.
- Regras de segurança do login administrativo, sessões e recuperação de acesso.
- Limites da personalização visual e forma de cadastro de assets.
- Metas mensuráveis de desempenho, acessibilidade e compatibilidade de navegadores.

Essas pendências devem ser resolvidas antes da implementação das funcionalidades correspondentes. Este documento não escolhe tecnologias nem substitui um plano técnico.
