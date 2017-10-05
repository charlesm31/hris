<template>
<div>
    <div class="jumbotron">
        <div class="container">
            <h1>Profile Page</h1>
            <p>Data pulled from multiple database tables using <strong>Eloquent and relationships.</strong>
            <br>Displayed via <strong>Vue.js and axion request</strong></p>
        </div>
    </div>
    <div class="container"> 
        <!-- Upper Profile -->
        <div class="row">
            <div class="col-sm-10">
                <h1 v-if="profile.firstname">{{ profile.firstname + ' ' + profile.lastname }}</h1>      
                <h1 v-else>User Name</h1>   
            </div>        
        </div>
        
        <div class="row">
        
            <!-- Left Profile -->
            <div class="col-sm-4">
                <ul class="list-group">
                    <li class="list-group-item text-muted">Personal Info</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Gender</strong></span> {{ profile.gender }}</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Role</strong></span> {{ profile.role }}</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Mobile</strong></span> {{ profile.mobile }}</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Pnumber:</strong></span> {{ profile.pnumber }}</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Salary:</strong></span> {{ profile.salary }}</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Manager:</strong></span> {{ profile.hiring_manager }}</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Tax File No:</strong></span> {{ profile.tax_file_num }}</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Start Date</strong></span> {{ profile.start_date }}</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Birthday</strong></span> {{ profile.birthday }}</li>
                </ul>

                <ul class="list-group">
                    <li class="list-group-item text-muted">Store Assignment</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Store</strong></span> {{ store.name }}</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Code</strong></span> {{ store.code }}</li>
                </ul>

                <ul class="list-group">
                    <li class="list-group-item text-muted">Uniform</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Shirt</strong></span> {{ profile.shirt_size }}</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Pants</strong></span> {{ profile.pants_size }}</li>
                    <li class="list-group-item text-right" v-if="profile.gender == 'Female'"><span class="pull-left" v-if="profile"><strong class="">Skirt</strong></span> {{ profile.skirt_size }}</li>
                </ul>           

                        
                <ul class="list-group">
                    <li class="list-group-item text-muted">Emergency Contact <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Name</strong></span> {{ contact.name }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Relation</strong></span> {{ contact.relation }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Mobile</strong></span> {{ contact.mobile}}</li>
                </ul>
                
            </div><!--/col-3-->


            <!-- Right Profile -->
            <div class="col-sm-8">
                <ul class="list-group">
                    <li class="list-group-item text-muted">Address</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Street</strong></span> {{ profile.street }}</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">City</strong></span> {{ profile.city }}</li>
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">State</strong></span> {{ profile.state }}</li>  
                    <li class="list-group-item text-right"><span class="pull-left" v-if="profile"><strong class="">Postal</strong></span> {{ profile.postal }}</li>
                </ul>

                <ul class="list-group">
                    <li class="list-group-item text-muted">Bank profile for Pay <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Bank</strong></span> {{ bank.bank }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Account Name</strong></span> {{ bank.account_name }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">BSB</strong></span> {{ bank.bsb }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Account Number</strong></span> {{ bank.account_number}}</li>
                </ul>        

                <div class="panel panel-default">
                    <div class="panel-heading">My Documents</div>                
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="thumbnail profile-docs">
                                        <img class="profile-docs-img" src="https://i2.wp.com/www.pctechguide.com/wp-content/uploads/2015/11/pdf.png?ssl=1">
                                        <div class="caption">
                                            <h4 v-if="documents.contract"><a :href="documents.contract" target="_blank">Contract</a></h4>
                                            <h4 v-else>No Contract</h4>
                                        </div><!-- caption -->
                                    </div><!-- thumbnail -->                               
                                </div><!-- col -->

                                <div class="col-md-4">
                                    <div class="thumbnail profile-docs">
                                        <img class="profile-docs-img" src="https://i2.wp.com/www.pctechguide.com/wp-content/uploads/2015/11/pdf.png?ssl=1">
                                        <div class="caption">
                                            <h4 v-if="documents.super_form"><a :href="documents.super_form" target="_blank">Super Form</a></h4>
                                            <h4 v-else>No Super Form</h4>
                                        </div><!-- caption -->
                                    </div><!-- thumbnail -->                               
                                </div><!-- col -->

                                <div class="col-md-4">
                                    <div class="thumbnail profile-docs">
                                        <img class="profile-docs-img" src="https://i2.wp.com/www.pctechguide.com/wp-content/uploads/2015/11/pdf.png?ssl=1">
                                        <div class="caption">
                                            <h4 v-if="documents.tfn_declartion"><a :href="documents.tfn_declartion" target="_blank">TFN Declaration</a></h4>
                                            <h4 v-else>No TFN Declaration</h4>
                                        </div><!-- caption -->
                                    </div><!-- thumbnail -->                               
                                </div><!-- col -->

                                <div class="col-md-4">
                                    <div class="thumbnail profile-docs">
                                        <img class="profile-docs-img" src="https://i2.wp.com/www.pctechguide.com/wp-content/uploads/2015/11/pdf.png?ssl=1">
                                        <div class="caption">
                                            <h4 v-if="documents.privacy_sign_off_sheet"><a :href="documents.privacy_sign_off_sheet" target="_blank">Privacy Sign Off Sheet</a></h4>
                                            <h4 v-else>No Privacy Sign Off Sheet</h4>
                                        </div><!-- caption -->
                                    </div><!-- thumbnail -->                               
                                </div><!-- col -->

                                <div class="col-md-4">
                                    <div class="thumbnail profile-docs">
                                        <img class="profile-docs-img" src="https://i2.wp.com/www.pctechguide.com/wp-content/uploads/2015/11/pdf.png?ssl=1">
                                        <div class="caption">
                                            <h4 v-if="documents.scanned_copy"><a :href="documents.scanned_copy" target="_blank">Scanned Passport | Birth Certificate</a></h4>
                                            <h4 v-else>No Scanned Passport | Birth Certificate</h4>                                        
                                        </div><!-- caption -->
                                    </div><!-- thumbnail -->                               
                                </div><!-- col -->

                            </div><!-- row -->
                        </div><!-- panel-body -->
                    </div><!-- panel-heading -->             
                </div><!-- panel -->           
                
            </div><!-- col-9 -->              
        </div><!-- row -->    
    </div><!-- container -->
</div>
</template>

<script>
export default {

    data() {
        return {
            profile:[],
            store:[],
            contact:[],
            bank:[],
            documents:[],
        }        
    },

    mounted(){
        console.log('Profile mounted.');
        
        axios.get('/user/profile').then( (response) => {
            this.profile = response.data.profile;
            this.store = response.data.store;
            this.contact = response.data.contact;
            this.bank = response.data.bank;
            this.documents = response.data.documents;
            console.log(response.data);
        });
    }   

}
</script>

<style scoped>

.list-group-item{
    min-height: 44px;
}

.profile-docs{
    padding-top: 20px;
    text-align: center;   
}

.profile-docs-img{
    max-width: 100px;
    display: block;
    margin: 0 auto;
}

.profile-docs h4{
    font-size: 15px;
}

</style>