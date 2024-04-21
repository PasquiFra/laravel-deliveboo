<script>
    
    function getSlugName(){
        const nameForm = document.getElementById('name').value;
        
        const splitName = NameForm.split(' ');
        
        const slugName = splitName.join('-');
        
        return slugName
    }
    
    document.getElementById('name').addEventListener('change', function() {
        
        document.getElementById('slug').value = getSlugName();
    });

</script>