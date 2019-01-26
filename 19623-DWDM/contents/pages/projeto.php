<style>
    #frequencia .A4 {
        padding-top: 40px;
        padding-bottom: 70px;
        padding-left: 70px;
        padding-right: 70px;
    }
    #frequencia h1 {
        color: grey;
    }

    #frequencia li{
        padding: 5px;
    }
    #frequencia img{
        width: 40%;
    }
    .center{
        text-align: center;
    }
    @media screen and (max-width: 768px) {
        p{
            font-size:14px;
        }
    }
</style>
<section class="pt-4">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Projeto</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Soluções</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Memória Descritiva</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-conclusao" role="tab" aria-controls="nav-conclusao" aria-selected="false">Conclusão</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <!--        Frequencia *****************************************-->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div id="frequencia">
                <div class="A4">
                    <div class="center">
                        <img class="mx-auto" src="resources\assets\images\logoestg.png" alt="Logotipo ESTG"/>
                        <p><b>Departamento de Tecnologia e Design</b></p>
                        <p><b>CTeSP - Desenvolvimento para a Web e Dispositivos Móveis</b></p>
                        <p><b>Tecnologia da internet</b></p>
                        <p><b>Enunciado do projeto 2018 2019</b></p>
                        <p><b>Docente:</b> Miguel Belém</p>
                        <hr>
                        <p>Este projeto tem como objetivo avaliar os conhecimentos adquiridos
                            durante as aulas práticas de Tecnologias da Internet, sobre <i>HTML, CSS.</i>
                            e a framework de frontend Bootstrap.</p>
                        <p>O projeto deverá ser desenvolvido no <i>IDE NetBeans</i> como projeto PHP.</p>
                        <p>O nome do projeto deve conter o número de aluno.</p>
                        <p><b>Objetivos</b></p>
                        <p>Criar um site para a ESTGP. Além do conteúdo genérico de apresentação da EST deve conter
                            pelo menos uma página sobre o CTeSP - Desenvolvimento para a Web e Dispositivos Móveis.</p>
                        <p><b>Requisitos</b></p> 
                    </div>
                    <ol type="1">
                        <li>O site deve possuir várias páginas e não repetir elementos que sejam comuns em todas
                            elas.(Ex. barra de navegação).
                        </li>
                        <li>Deve ser totalmente responsivo, mobile friendly e fazer uso das grids de bootstrap quando necessário.
                        </li>
                        <li>Deve existir uma página de contacto com um formulário. Ao submeter a infromação desse formulário, deve ser
                            exibida por baixo do mesmo, uma caixa de alert do Bootstrap com a informação inserida.
                        </li>
                        <li>Todas as outras páginas ficarão ao critério de aluno sendo que deverão conter principalmente elementos 
                            que foram abordados durante as aulas.
                        </li>
                        <li>Pode ser criado <i>CSS</i> próprio para além das classes já fornecidas pelo Bootstrap.</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--        Soluções  *****************************************-->
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">


            <section class="pt-4">
                <ol type="1">
                    <p><b>Requisitos</b></p> 
                    <li>O site deve possuir várias páginas e não repetir elementos que sejam comuns em todas
                        elas.(Ex. barra de navegação).
                        <p><strong>Solução Desenvolvida:</strong> Foi criado uma ficheiro index.php na raiz do projeto que
                            recebe todos os includes necessarios para o layout do projeto, o index.php tambem recebe toas as páginas
                            pela URL organizadas na pasta contents/pages, se nenhum ficheiro for enviado por defeito vai ler o main.php <p>
                    </li>
                    <li>Deve ser totalmente responsivo, mobile friendly e fazer uso das grids de bootstrap quando necessário.
                        <p><strong>Solução Desenvolvida:</strong> Todo o conteudo está dentro de grids do bootstraps, o tamanho do texto vai reduzindo
                            conforme for o tamanho do browser do utilizador, algumas imagens são excluidas para facilitar a navegação em dispositivos 
                            muito pequenos <p>
                    </li>
                    <li>Deve existir uma página de contacto com um formulário. Ao submeter a infromação desse formulário, deve ser
                        exibida por baixo do mesmo, uma caixa de alert do Bootstrap com a informação inserida.
                        <p><strong>Solução Desenvolvida:</strong>A solução apresentada é um formulário com icones da fontAwsome, em termos estéticos tem
                            um iframe do google maps, para completar a exigência foi criado um script em javascript para imprimir os inputs do formulário.<p>
                    </li>
                    <li>Todas as outras páginas ficarão ao critério de aluno sendo que deverão conter principalmente elementos 
                        que foram abordados durante as aulas.
                        <p><strong>Solução Desenvolvida:</strong>Foram cuidados esses requisitos, foi utilizado o framework Bootstrraps, CSS, HTML e FontAwesome
                            Todas a pesquiza foi feita no w3Schools<p>
                    </li>
                    <li>Pode ser criado <i>CSS</i> próprio para além das classes já fornecidas pelo Bootstrap.</li>
                    <p><strong>Solução Desenvolvida:</strong> Foram criados CSS personalizados globais e por ficheiro.<p>
                </ol>
            </section>


        </div>
        <!--        Memória descritiva  *****************************************-->
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <section class="pt-4">
                <div class=" A4">
                    <h4><b>Carlos Albero Serrano Bicho</b></h4>
                    <h4>Número de aluno: 19623</h4>
                    <h4>Desenvolvimento para a Web e Dispositivos Móveis</h4>
                    <h4Tecnologias da Internet 2018/19</h4>
                        <h5>Unidade Curricular: Técnologia da Internet </h5>
                        <h5>Projeto: Final Semestre </h5><hr>
                        <p><b>Pequena memória descritiva.</b></p>
                        <p>Este projeto foi otimizado para o Gogle Crhome , foi elaborado no IDE Netbeans, a linguagem de programação 
                            é <b><i>Html</i></b>, <b><i>CSS</i></b>, <b><i>PHP</i><b> e <i>JavaScript</i></b></b>, é totalmente responsivo, o 
                            desafio maior foi pensar a forma como
                            poderia organizar o conteudo do projeto de maneira que não fosse redundante, a solução desenvolvida foi trabalhar
                            com o envio de informação pela url, conseguido ter sempre o conteudo que o utilizador vizualiza num unico sitio.</p><hr>

                        <p>O Projeto está dividido em 3 categorias <b>contents</b>(Conteudo), <b>layout</b>(estrutura), <b>resources</b>(Recursos).</p>

                        <h5><b>Contents</b>(conteudos)</h5>
                        <p>Os conteudos é onde estão todas as páginas do conteudo do projeto, estão divididos em pastas com todas as dependencias
                            para que de uma forma facil sejá editavel e conpreensivel na otica do programador.</p>
                        <p>/contents/pages</p>
                        <ul type="disc">
                            <li><b>ctesp</b> - Todas as ofertas do Ctesp 2018/2019</li>
                            <li><b>licenciaturas</b> - Todas as ofertas das licenciaturas 2018/2019</li>
                            <li><b>mestrados</b> - Todas as ofertas das mestrados 2018/2019</li>
                            <li><b>noticias</b> - Exemplo de uma noticia</li>
                            <li><b>ofertaformativa</b> - Generalização de todas as ofertas formativas</li>
                            <li><b>contactos.php</b> - Conteudo dos contactos</li>
                            <li><b>main.php</b> - Página inicial do projeto.</li>
                            <li><b>projeto.php</b> - Memória descritiva do projeto.</li>
                            <li><b>quemsomos.php</b> - Conteudo da apresentação do ESTGP.</li>
                        </ul>

                        <h5><b>Layout</b>(estrutura)</h5>
                        <p>O Layout é onde está a estrutura, neste caso o que é comum em todas as páginas nomeadamente o footer e a barra de navegação
                            , estas duas páginas vão ser integradas no projetto por meio de um include no ficheiro /index.php.</p>
                        <p>/layout/footer</p>
                        <ul type="disc">
                            <li><b>footer.php</b> - footer do projeto comum a todas as páginas</li>
                        </ul>
                        <p>/layout/navbars</p>
                        <ul type="disc">
                            <li><b>navbars.php</b> - navbar do menu das ligações do projeto comum a todas as páginas</li>
                        </ul>

                        <h5><b>Resources</b>(recursos)</h5>
                        <p>Os recursos é onde estão todas as dependencias do projeto, as ligações externas dos frameworks, as customizadas locais e as imagens 
                            globais do projeto. </p>
                        <p>/resources/assets/css</p>
                        <ul type="disc">
                            <li><b>css.php</b> - Todas as dependencias css para incluir no index.php</li>
                            <li><b>myStyles.php</b> - css personalizado para todas as páginas do projeto</li>
                        </ul>
                        <p>/resources/assets/imagens</p>
                        <ul type="disc">
                            <li><b>js.php</b> - Todas as dependencias JavaScript para incluir no index.php</li>
                            <li><b>myStyles.js</b> - javaScript personalizado para todas as páginas do projeto</li>
                        </ul>
                        <p>/resources/assets/imagens</p>
                        <ul type="disc">
                            <li><b>imagens</b> - pasta com as imagens glbais do projeto.</li>
                        </ul>

                </div>
            </section>
        </div>
        <!--        Conclusao  *****************************************-->
        <div class="tab-pane fade" id="nav-conclusao" role="tabpanel" aria-labelledby="nav-contact-tab">
            <section class="pt-4">
                <div class=" A4">
                    <h4>Conclusão</h4>
                    <p>Posso concluir que neste projeto foi dado especial atenção há organização e responsividade, pondo em segundo plano a estética
                        e conteudo. O foco foi concentrado no desenvolvimento de soluções e demostração de abilidades.</p>
                    <h4>Desafio maior: </h4>
                    <p>Este projeto foi desafiante e enriquecedor, infelizmente devido á minha condição de trabalhador estudante não pude comparecer
                        a todas as aulas, a maior parte do conhecimento foi de consulta e estudo extra escolar, foram vários os deafios 
                        concretamente neste projeto a forma como fui obrigado a desenvolver uma solução para o código redundante foi fundamental para a minha aprendizagem.</p>
                    <h4>Agradecimentos: </h4>
                    <p>Finalizando só me resta agradecer ao Docente Miguel Belém pela competência e prontidão que ia desponibilizando os conteudos das aulas 
                        no PAE, foram sem duvida o fator determinante da minha aprendizajem</p>
                </div>
            </section>
        </div>
    </div>
</section>
