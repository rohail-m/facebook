<script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
crossorigin="anonymous"></script>

<script>
    let btn = document.querySelector('.reg');
    let form = document.querySelector('.reg-form');
    btn.addEventListener('click',(e)=>{
        e.preventDefault();
        form.style.display = 'block';
    })
</script>