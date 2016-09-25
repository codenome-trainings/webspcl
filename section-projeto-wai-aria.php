<section id="ProjetoWaiAria">
    <h1 class="title">Projeto WAI-ARIA</h1>
    <p>O WAI-ARIA melhora ajuda a melhorar a semântica de elementos e ações do HTML. Essa semântica
        é
        estendida para widgets, estruturas e comportamentos, dessa forma os leitores de tela
        conseguem
        entender quando o usuário está interagindo com TABS ou elementos formatados. Por exemplo:
        você
        utiliza uma imagem personalizada para simular o comportamento de um input radio. É possível
        fazer todo o comportamento emulando as ações de um input radio via javascript. O problema é
        que
        os leitores de tela não vão entender esse comportamento, e é aí que entra o WAI-ARIA,
        avisando
        ao leitor de tela que determinado elemento é um input radio.</p>
    <p>Com WAI-ARIA também podemos definir áreas de navegação na página, avisando o leitor de tela
        que
        na página existem cabeçalho, rodapé, content, sidebar e etc... O Locaweb Style já faz uma
        captação automática destas áreas, inserindo as respectivas roles. Veja o pedaço de código
        exemplificando:</p>
    <div class="espaco-superior">
        <script src="https://gist.github.com/codenome/d747e69a57b2bf556c76b5cfab016089.js"></script>
    </div>
</section>