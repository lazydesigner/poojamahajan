document.getElementById('serach-city-input').addEventListener('keyup', (e)=>{
    if( e.target.value.trim() != '' ){
        const formdata = new FormData()
    formdata.append('search-city',e.target.value)
    formdata.append('category',document.getElementById('category').value)
    formdata.append('status', 'search-city')
    fetch('<?= get_url() ?>dashboard/fetch_data.php',{
        method:'POST',
        body:formdata
    }).then(res=>res.json())
    .then(d=>{
        document.getElementById('list-of-cities').style.display = 'block';
        document.getElementById('list-of-cities-id').innerHTML = d['city'];
        
    })
    }else{
        document.getElementById('list-of-cities').style.display = 'none';
        document.getElementById('list-of-cities-id').innerHTML = '';
    }
})
document.addEventListener('click',()=>{
        document.getElementById('list-of-cities').style.display = 'none';
        document.getElementById('list-of-cities-id').innerHTML = '';
        document.getElementById('serach-city-input').value = '<?=$city?>';
})
Area_Locality()

function Area_Locality(){
    const citys = new FormData()
    citys.append('city_id', '<?=$city ?>')  
    citys.append('status', 'city_id')
    fetch('<?= get_url() ?>dashboard/fetch_data.php', {
            method: 'POST',
            body: citys
        }).then(res => res.json())
        .then(d => {
            document.getElementById('area-locality').innerHTML = d['output']
        })
}

document.getElementById('area-locality').addEventListener('change',()=>{
    window.location.href = '<?= get_url() ?>call-girls/<?=$city ?>/'+document.getElementById('area-locality').value+''
})
