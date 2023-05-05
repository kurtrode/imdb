const $field = document.getElementById('search');
const $titles = document.getElementById('results');
$field.addEventListener('keyup',()=>{
    $api = async() => {
        $thing = await fetch ('imdb.test/results');
        $thingjson = await $thing.json();
        $titles.innerHTML += $titles.name;
    }
    $api();
})
