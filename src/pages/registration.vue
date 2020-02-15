<template>
    <div>
        <h1>{{message}}</h1>
    </div>
</template>

<script>
export default {
   // data: function(value, index) {return {message'hallo}}=> ({ message: 'Hallo' }),
    data: () => ({ message: 'Hallo' }),
    //data: {return {message: 'Hallo'}}
};
</script>