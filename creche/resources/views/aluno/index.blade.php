<x-layout title="Alunos cadastrados:">


    @isset($mensagemSucesso)

        <div class="alert alert-success">
            {{$mensagemSucesso}}
        </div>
    @endisset

    @foreach ($pessoas as $pessoa)
    <ul class="list-group mt-2">
        <li class="list-group-item d-flex justify-content-between align-items-center" >
            Matricula: {{$pessoa->matricula}}<br/>
            Nome: {{$pessoa->nome}} <br/>
            Idade: {{$pessoa->idade}}<br/>
            Cpf: {{$pessoa->cpf}}<br/>
            Endereço: {{$pessoa->endereco}}<br/>


            <div class="d-flex justify-content-between">
            <a href="pessoa/editaluno/{{$pessoa->id}}" class= "btn btn-second" href="">Editar</a>
            <form action="/aluno/{{$pessoa->id}}" method="post" onsubmit= "return confirm('Tem certeza?')">
                @csrf
                @method('DELETE')
            <button class= "btn btn-second">apagar</button>
        </form>
            </div>
        </li>


    </ul>

    @endforeach

<a class="btn btn-primary mt-4" href="aluno/create">Adicionar</a>
</form>

</x-layot>