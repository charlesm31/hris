<template>
<div class="container">

    <hr class=""><hr class="">

    <!-- Upper Profile -->
    <div class="row">
        <div class="col-sm-10">
            <h1 class="">{{ details.firstname + ' ' + details.lastname }}</h1>         
        </div>        
    </div>
    
    <div class="row">
    
        <!-- Left Profile -->
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Personal Info</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Gender</strong></span> {{ details.gender }}</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Role</strong></span> {{ details.role }}</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Mobile</strong></span> {{ details.mobile }}oe</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Pnumber:</strong></span> {{ details.pnumber }}</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Salary:</strong></span> {{ details.salary }}</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Manager:</strong></span> {{ details.hiring_manager }}</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Tax File No:</strong></span> {{ details.tax_file_num }}</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Start Date</strong></span> {{ details.start_date }}</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Birthday</strong></span> {{ details.birthday }}</li>
            </ul>

            <div class="panel panel-default">
                <div class="panel-heading">Store <i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body">
                    <li class="text-right"><span class="pull-left" v-if="details"><strong class="">{{store.name}}</strong></span> {{ store.code }}</li>
                </div>
            </div><!-- panel -->

            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Uniform</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Shirt</strong></span> {{ details.shirt_size }}</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Pants</strong></span> {{ details.pants_size }}</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Skirt</strong></span> {{ details.skirt_size }}</li>
            </ul>           

                     
            <ul class="list-group">
                <li class="list-group-item text-muted">Emergency Contact <i class="fa fa-dashboard fa-1x"></i></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Name</strong></span> {{ contact.name }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Relation</strong></span> {{ contact.relation }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Mobile</strong></span> {{ contact.mobile}}</li>
            </ul>
            
        </div><!--/col-3-->


        <!-- Right Profile -->
        <div class="col-sm-8" style="" contenteditable="false">
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Address</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Street</strong></span> {{ details.street }}</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">City</strong></span> {{ details.city }}</li>
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">State</strong></span> {{ details.state }}</li>  
                <li class="list-group-item text-right"><span class="pull-left" v-if="details"><strong class="">Postal</strong></span> {{ details.postal }}</li>
            </ul>

            <ul class="list-group">
                <li class="list-group-item text-muted">Bank Details for Pay <i class="fa fa-dashboard fa-1x"></i></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Bank</strong></span> {{ bank.bank }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Account Name</strong></span> {{ bank.account_name }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">BSB</strong></span> {{ bank.bsb }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Account Number</strong></span> {{ bank.account_number}}</li>
            </ul>        

            <div class="panel panel-default target">
                <div class="panel-heading" contenteditable="false">My Documents</div>                
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail profile-docs">
                                    <img class="profile-docs-img" src="https://i2.wp.com/www.pctechguide.com/wp-content/uploads/2015/11/pdf.png?ssl=1">
                                    <div class="caption">
                                        <h4 v-if="documents.contract"><a href="">{{ documents.contract }}</a></h4>
                                        <h4 v-else>Contract</h4>
                                    </div><!-- caption -->
                                </div><!-- thumbnail -->                               
                            </div><!-- col -->

                            <div class="col-md-4">
                                <div class="thumbnail profile-docs">
                                    <img class="profile-docs-img" src="https://i2.wp.com/www.pctechguide.com/wp-content/uploads/2015/11/pdf.png?ssl=1">
                                    <div class="caption">
                                        <h4 v-if="documents.super_form"><a href="">{{ documents.super_form }}</a></h4>
                                        <h4 v-else>Super Form</h4>
                                    </div><!-- caption -->
                                </div><!-- thumbnail -->                               
                            </div><!-- col -->

                            <div class="col-md-4">
                                <div class="thumbnail profile-docs">
                                    <img class="profile-docs-img" src="https://i2.wp.com/www.pctechguide.com/wp-content/uploads/2015/11/pdf.png?ssl=1">
                                    <div class="caption">
                                        <h4 v-if="documents.tfn_declartion"><a href="">{{ documents.tfn_declartion }}</a></h4>
                                        <h4 v-else>TFN Declaration</h4>
                                    </div><!-- caption -->
                                </div><!-- thumbnail -->                               
                            </div><!-- col -->

                            <div class="col-md-4">
                                <div class="thumbnail profile-docs">
                                    <img class="profile-docs-img" src="https://i2.wp.com/www.pctechguide.com/wp-content/uploads/2015/11/pdf.png?ssl=1">
                                    <div class="caption">
                                        <h4 v-if="documents.privacy_sign_off_sheet"><a href="">{{ documents.privacy_sign_off_sheet }}</a></h4>
                                        <h4 v-else>Privacy Sign Off Sheet</h4>
                                    </div><!-- caption -->
                                </div><!-- thumbnail -->                               
                            </div><!-- col -->

                            <div class="col-md-4">
                                <div class="thumbnail profile-docs">
                                    <img class="profile-docs-img" src="https://i2.wp.com/www.pctechguide.com/wp-content/uploads/2015/11/pdf.png?ssl=1">
                                    <div class="caption">
                                        <h4 v-if="documents"><a href="">{{ documents.scanned_copy }}</a></h4>
                                        <h4 v-else>Scanned Copy of Passport or Birth Certificate</h4>                                        
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
</template>

<script>
export default {

    data() {
        return {
            details:[],
            store:[],
            contact:[],
            bank:[],
            documents:[],
        }        
    },

    mounted(){
        console.log('Profile mounted.');
        
        axios.get('/user/details').then( (response) => {
            this.details = response.data.user_details;
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

</style>