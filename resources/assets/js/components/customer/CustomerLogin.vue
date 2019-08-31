<template>
<div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"> <a href="index.php"><img src="images/sol-recycling-logo.png" alt="Sol Recycling Logo" class="middle-img" title="Sol Recycling Logo"></a>
            <span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                 <form v-on:submit.prevent="loginForm()">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="email" id="username" type="text" placeholder="Username" autocomplete="off" v-model="user.email">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Password" v-model="user.password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="remember" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

                </form>
                
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="" class="footer-link">Customer Sign Up</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="hauler-signup.php" class="footer-link">Hauler Sign Up</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="driver-signup.php" class="footer-link">Driver Sign Up</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="forgot-password.php" class="footer-link small">Forgot Password?</a></div>
                
                
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                user: {
                    email: '',
                    password: '',
                }
            }
        },
        methods: {
            loginForm() {
                var app = this;
                var newCompany = app.user;
                axios.post('/auth/login', newCompany)
                    .then(function (resp) {
                        app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your company");
                    });
            }
        }
    }
</script>

