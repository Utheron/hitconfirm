<template>
    <div class="col hcf-admin__card">
        <div class="hcf-admin__card-title">
            New Users
        </div>
        <div class="hcf-admin__card-body">
            <ul class="hcf-card__users-items">
                <li v-for="user in users" :key="user.id">
                    <img :src="user.avatar" class="img-fluid" alt="">
                    {{ user.username }}
                </li>
            </ul>
        </div>
        <div class="hcf-admin__card-footer"></div>
    </div>
</template>

<script>
    export default {
        props: ['users'],
        data() {
            return {
            }
        }        
    }
</script>