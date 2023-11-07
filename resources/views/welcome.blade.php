<x-layout>
    {{--
    <div class="container my-5">
        <div class="row">
            <h2 class="text-center" id="number">0</h2>
        </div>
        <hr>
        <div class="row">
            <div class="col 12 d-flex justify-content-center">
                <button class="btn btn-danger mx-2" id=decrement">-1</button>
                <button class="btn btn-success mx-2" id="increment">+1</button>
            </div>
        </div>
    </div>--}}
    <livewire:counter />
</x-layout>


{{--<script>
    let number = document.querySelector('#number');
    let increment = document.querySelector('#increment');
    let decrement = document.querySelector('#decrement');
    let value = number.innerHTML;

    //console.log(number, increment, decrement, value);

    increment.addEventListener('click', ()=>{
        value++;
        number.innerHTML = value;
    });

    decrement.addEventListener('click', ()=>{
        value--;
        number.innerHTML = value;
    });

</script> --}}

