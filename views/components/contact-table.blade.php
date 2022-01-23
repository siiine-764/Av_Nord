<div class="container-fluid">
        <div class="row" style="background: linear-gradient(53.5deg, #834FE7 0%, #4ED3D3 98.83%); margin: 10px; border-radius: 10px; padding: 20px;box-shadow: 0px 8px 8px rgb(46, 44, 44)" id="con">
            <h1 style="text-align: center; color: blanchedalmond;">Prenez Contact Avec Nous</h1>
            <div class="col-sm-6">
                <img src="img/contact.png" width="100%" alt="" id="img-contact">
            </div>
            <div class="col-sm-6">

            <form method="POST" action="{{ url('/store_contact') }}">
                <div style="display:inline;" >
                @csrf
                    <input style="" name="prenom" type="text"  id="input-contact" placeholder="Entrez Votre Prenom" value="{{ $contacts->prenom ?? null }}" >
                    <input type="text" name="nom" style="" id="input-contact" placeholder="Entrez Votre Nom" value="{{ $contacts->nom ?? null }}">
                    
                </div>
                <div>
                    <input type="email" name="adresse" style="" id="input-contact" placeholder="Entrez Votre Adresse" value="{{ $contacts->adresse ?? null }}">
                    <input type="text" name="sujet" style="" id="input-contact" name="sujet" placeholder="Entrez Votre Sujet" value="{{ $contacts->sujet ?? null }}">
                    
                </div>
                <textarea type="text" name="message" style="width: 95%; height: 200px;" id="input-contact" placeholder="Entrez Votre Message"
                value="{{ $contacts->message ?? null }}"  ></textarea>
                @error('prenom') <span class="text-danger">{{$message}}</span> @enderror
                @error('nom') <span class="text-danger">{{$message}}</span> @enderror
                @error('adresse') <span class="text-danger">{{$message}}</span> @enderror
                @error('sujet') <span class="text-danger">{{$message}}</span> @enderror
                @error('message') <span class="text-danger">{{$message}}</span> @enderror
                <button type="submit" id="button-contact">Envoyer</button>
            </from>


                </div>


        </div>
    </div>