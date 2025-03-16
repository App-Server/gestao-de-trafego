<x-navbarsite title="Cadastro de Gestor" />
<br>
<div class="container">
    <h3>Cadastro de gestor de trafego</h3>
    <div class="card">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome completo (para empresa razão social)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Whatsapp</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CPF</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CNPJ</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Para agências de marketing ou MEI, ME">
                </div>
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Escolha a modalidade de trabalho</option>
                    <option value="1">Remoto</option>
                    <option value="2">Hibrido</option>
                    <option value="3">Presencial</option>
                    <option value="4">Negociavel</option>
                </select>
                <select class="form-select mb-3" aria-label="Escolha o estado de atuação">
                    <option selected>Escolha o estado de atuação</option>
                    <option value="NA">Todo o Brasil</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Emitir Nota Fiscal?</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select> 
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Quantos anos de experiência você tem com gestão de tráfego?</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>        
                <div class="mb-3">
                    <label for="validationCustom04" class="form-label">Deixe a sua mensagem para seus clientes</label>                                    
                    <textarea type="name" name="observations" class="form-control" id="comments" id="floatingTextarea2" style="height: 100px" ></textarea>
                </div>        
                <button type="submit" class="btn btn-primary">Cadastra</button>
            </form>
        </div>
    </div>
</div>

<x-footersite />