<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div x-data="{
        lesEtudiants: @entangle('lesEtudiants').defer,
        lesNces: @entangle('lesNces').defer,
        nce: @entangle('nce').defer,
        nom: @entangle('nom').defer,
        nceOK: @entangle('nceOK').defer,
        prenoms: @entangle('prenoms').defer,
        inscription_ok: @entangle('inscription_ok').defer,
        etudiantOK: false,

        checkInfo(){
            this.etudiantOK = Boolean(this.prenoms) && Boolean(this.nom);
        },
        EnregisterData: async function(){
                await @this.storeData().then(value => {
                    data = JSON.parse(value);
                });
            }
        }">

        <div class="container">
            <h1>
                Inscription des étudiants
            </h1>
            <template x-if="inscription_ok">
                <h2 x-text="'Merci vos données ont été enregistrées'">

                </h2>
            </template>
            <template x-if="!inscription_ok">
                
                    <div class="row">
                        <div class="col-12">

                                    <fieldset style="border:1px blue solid; padding: 2.0em;">
                                        <legend>Info étudiant</legend>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nce">NCE</label> <br>
                                                    <input type="text" x-model="nce" style="border:1px blue solid;"
                                                        class="form-control"">
                                                </div>
                                                <template x-if="!nceOK">
                                                    <div style="color:red; font-weight: bold;">
                                                        Ce NCE est déjà utilisé par un autre étudiant
                                                    </div>
                                                </template>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nom">Nom</label><br>
                                                    <input type="text" x-model="nom" style="border:1px blue solid;"
                                                            class="form-control" x-on:change="checkInfo()">
                                                </div>  
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="prenoms">Prenoms</label><br>
                                                    <input type="text" x-model="prenoms" style="border:1px blue solid;"
                                                        class="form-control" x-on:change="checkInfo()">
                                                </div>
                                            </div>
                                            <template x-if="etudiantOK">
                                                <div class="row" style="padding: 1.0em;">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary btn-lg btn-block" style="width: 100%;" @click="EnregisterData()">
                                                             Valider
                                                        </button>
                                                    </div>
                                                </div>
                                            </template>
                                    </fieldset>
                        </div> 
                    </div>
            </template> 
        </div>
        
    </div>
</div>
