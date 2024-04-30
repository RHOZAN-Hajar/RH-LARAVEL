<x-master title="Se connecter">
<x-master>
    <style>
        .divr{
            display: flex;
            justify-content: center
        }
        .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  width: 550px;
  background-color: #fff;
  padding: 20px;
  border-radius: 20px;
  position: relative;
}
.title {
  font-size: 28px;
  color: royalblue;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
}
.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}
.form label {
  position: relative;
}
.form label .input {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}
.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}
.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}
.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 600;
}
.form label .input:valid + span {
  color: green;
}
.submit {
  border: none;
  outline: none;
  background-color: royalblue;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
}
.submit:hover {
  background-color: rgb(56, 90, 194);
}    </style>
    
    <div class="divr">
    
        <form method="POST" action=" {{route('login.show')}}" class="form" >
            @csrf
            <p class="title">Se connecter</p>

                    
            <label>
                <input required="" placeholder="" type="email" class="input" name="email" value="{{ old('email') }}">
                <span>Email</span>
            </label> 
            @error('email')
            <div class="text-danger">{{$message}}</div>
        @enderror
                
            <label>
                <input required="" placeholder="" type="password" class="input"  name="password">
                <span>Mot De Passe</span>
            </label>
            @error('password')
            <div class="text-danger">{{$message}}</div>
        @enderror
            <button class="submit">Envoyer</button>
            
        </form>
    </div>

</x-master>
</x-master>