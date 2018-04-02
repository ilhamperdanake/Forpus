// lamanlogin
package com.example.asus_pc.dataform;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class lamanlogin extends AppCompatActivity {
    String user,pass;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_lamanlogin);
        Button btn_login = (Button)findViewById(R.id.Login);
        final EditText username = (EditText)findViewById(R.id.username);
        final EditText password = (EditText)findViewById(R.id.password);
        btn_login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                user = username.getText().toString();
                pass = password.getText().toString();

                if (user.equals("rizki")&& pass.equals("12345")){
                    Intent intent = new Intent(lamanlogin.this, MainActivity.class);
                    startActivity(intent); //jika di button udah ditambahkan Android: onClick='login'
                }else{
                    Toast.makeText(lamanlogin.this, "Username atau Password salah", Toast.LENGTH_SHORT).show();
                }
            }
        });
    }
}

// MainActivity1

package com.example.asus_pc.dataform;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;

public class MainActivity extends AppCompatActivity {
    String nama,alamat,email;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Button btn_selesai = (Button)findViewById(R.id.selesai);
        final EditText nama = (EditText) findViewById(R.id.nama);
        final EditText alamat = (EditText) findViewById(R.id.alamat);
        final EditText email = (EditText) findViewById(R.id.email);
        final RadioGroup rb = (RadioGroup) findViewById(R.id.radioGroup6);
        final CheckBox cb_mobil = (CheckBox)findViewById(R.id.cb_mobil);
        final CheckBox cb_motor = (CheckBox)findViewById(R.id.cb_motor);
        final CheckBox cb_lakiwanita = (CheckBox)findViewById(R.id.cb_lakiwanita);
        final CheckBox cb_game = (CheckBox)findViewById(R.id.cb_game);

        btn_selesai.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String cek="";
                String jenisK="",name,address,surat;
                int id = rb.getCheckedRadioButtonId();
                name = nama.getText().toString();
                address= alamat.getText().toString();
                surat = email.getText().toString();

                switch (id){
                    case R.id.rb_laki:
                        jenisK = "Laki - Laki";
                        break;
                    case R.id.rb_perempuan:
                        jenisK = "Perempuan";
                        break;
                }
                if(cb_mobil.isChecked()){
                    cek += "Bermain mobil ";
                }
                if(cb_motor.isChecked()){
                    cek += "Bermain motor ";
                }
                if(cb_lakiwanita.isChecked()){
                    cek += "Bermain Laki atau Wanita";
                }
                if(cb_game.isChecked()) {
                    cek += "Bermain game ";
                }
                Bundle b = new Bundle();
                b.putString("nama",name);
                b.putString("alamat",address);
                b.putString("email",surat);
                b.putString("jkel",jenisK);
                b.putString("cek",cek);
                Intent i = new Intent(MainActivity.this,Main2Activity.class);
                i.putExtras(b);
                startActivity(i);
            }
        });

    }
}


// Main2Activity
package com.example.asus_pc.dataform;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

public class Main2Activity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        TextView nama = (TextView)findViewById(R.id.textView2);
        TextView alamat = (TextView)findViewById(R.id.textView4);
        TextView email = (TextView)findViewById(R.id.textView5);
        TextView jkel = (TextView)findViewById(R.id.textView6);
        TextView hobi = (TextView)findViewById(R.id.textView);

        Bundle b = getIntent().getExtras();

        String cek_hobi = b.getString("cek");
        String cek_nama = b.getString("nama");
        String cek_alamat = b.getString("alamat");
        String cek_email = b.getString("email");
        String cek_jkel = b.getString("jkel");
        nama.setText(cek_nama);
        alamat.setText(cek_alamat);
        email.setText(cek_email);
        jkel.setText(cek_jkel);
        hobi.setText(cek_hobi);

    }

}

// activity_lamanlogin
<?xml version="1.0" encoding="utf-8"?>
<android.support.constraint.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".Main2Activity">

    <TextView
        android:id="@+id/textView"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="291dp"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintHorizontal_bias="0.508"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toBottomOf="@+id/textView6" />

    <TextView
        android:id="@+id/textView6"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="16dp"
        app:layout_constraintBottom_toTopOf="@+id/textView"
        app:layout_constraintHorizontal_bias="0.508"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toBottomOf="@+id/textView5" />

    <TextView
        android:id="@+id/textView5"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="12dp"
        app:layout_constraintBottom_toTopOf="@+id/textView6"
        app:layout_constraintHorizontal_bias="0.508"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toBottomOf="@+id/textView4" />

    <TextView
        android:id="@+id/textView4"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="13dp"
        app:layout_constraintBottom_toTopOf="@+id/textView5"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toBottomOf="@+id/textView2" />

    <TextView
        android:id="@+id/textView2"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="12dp"
        android:layout_marginTop="27dp"
        app:layout_constraintBottom_toTopOf="@+id/textView4"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" />

</android.support.constraint.ConstraintLayout>







;

// activity_main
<?xml version="1.0" encoding="utf-8"?>
<android.support.constraint.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".MainActivity"
    tools:layout_editor_absoluteY="81dp">

    <EditText
        android:id="@+id/email"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="12dp"
        android:ems="10"
        android:hint="email"
        android:inputType="textPersonName"
        app:layout_constraintBottom_toTopOf="@+id/radioGroup6"
        app:layout_constraintStart_toStartOf="@+id/alamat"
        app:layout_constraintTop_toBottomOf="@+id/alamat" />

    <EditText
        android:id="@+id/alamat"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="6dp"
        android:ems="10"
        android:hint="alamat"
        android:inputType="textPersonName"
        app:layout_constraintBottom_toTopOf="@+id/email"
        app:layout_constraintStart_toStartOf="@+id/nama"
        app:layout_constraintTop_toBottomOf="@+id/nama" />

    <EditText
        android:id="@+id/nama"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="13dp"
        android:layout_marginTop="6dp"
        android:ems="10"
        android:hint="nama"
        android:inputType="textPersonName"
        app:layout_constraintBottom_toTopOf="@+id/alamat"
        app:layout_constraintEnd_toEndOf="parent"
        app:layout_constraintStart_toStartOf="parent"
        app:layout_constraintTop_toTopOf="parent" />


    <RadioGroup
        android:id="@+id/radioGroup6"
        android:layout_width="229dp"
        android:layout_height="0dp"
        android:layout_marginBottom="23dp"
        android:orientation="horizontal"
        app:layout_constraintBottom_toTopOf="@+id/cb_mobil"
        app:layout_constraintEnd_toEndOf="parent"
        app:layout_constraintStart_toStartOf="parent"
        app:layout_constraintTop_toBottomOf="@+id/email">

        <RadioButton
            android:id="@+id/rb_laki"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:layout_marginLeft="16dp"
            android:text="Laki-Laki"
            app:layout_constraintLeft_toLeftOf="parent"
            app:layout_constraintTop_toBottomOf="@+id/email" />

        <RadioButton
            android:id="@+id/rb_perempuan"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:layout_marginLeft="16dp"
            android:text="Perempuan"
            app:layout_constraintLeft_toLeftOf="parent"
            app:layout_constraintTop_toBottomOf="@+id/rb_laki" />
    </RadioGroup>

    <Button
        android:id="@+id/selesai"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="79dp"
        android:layout_marginEnd="35dp"
        android:text="Selesai"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintEnd_toEndOf="@+id/cb_game"
        app:layout_constraintTop_toBottomOf="@+id/cb_lakiwanita" />

    <CheckBox
        android:id="@+id/cb_mobil"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="31dp"
        android:layout_marginStart="1dp"
        android:text="bermain mobil"
        app:layout_constraintBottom_toTopOf="@+id/cb_game"
        app:layout_constraintStart_toStartOf="@+id/radioGroup6"
        app:layout_constraintTop_toBottomOf="@+id/radioGroup6" />

    <CheckBox
        android:id="@+id/cb_motor"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="bermain motor"
        app:layout_constraintStart_toStartOf="@+id/cb_mobil"
        app:layout_constraintTop_toBottomOf="@+id/cb_mobil" />

    <CheckBox
        android:id="@+id/cb_lakiwanita"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="17dp"
        android:text="bermain lelaki atau wanita"
        app:layout_constraintBottom_toTopOf="@+id/selesai"
        app:layout_constraintStart_toStartOf="@+id/cb_game"
        app:layout_constraintTop_toBottomOf="@+id/cb_game" />

    <CheckBox
        android:id="@+id/cb_game"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="bermain game"
        app:layout_constraintBottom_toTopOf="@+id/cb_lakiwanita"
        app:layout_constraintStart_toStartOf="@+id/cb_motor"
        app:layout_constraintTop_toBottomOf="@+id/cb_mobil" />

</android.support.constraint.ConstraintLayout>






;


// activity_main2
<?xml version="1.0" encoding="utf-8"?>
<android.support.constraint.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".Main2Activity">

    <TextView
        android:id="@+id/textView"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="291dp"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintHorizontal_bias="0.508"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toBottomOf="@+id/textView6" />

    <TextView
        android:id="@+id/textView6"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="16dp"
        app:layout_constraintBottom_toTopOf="@+id/textView"
        app:layout_constraintHorizontal_bias="0.508"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toBottomOf="@+id/textView5" />

    <TextView
        android:id="@+id/textView5"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="12dp"
        app:layout_constraintBottom_toTopOf="@+id/textView6"
        app:layout_constraintHorizontal_bias="0.508"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toBottomOf="@+id/textView4" />

    <TextView
        android:id="@+id/textView4"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="13dp"
        app:layout_constraintBottom_toTopOf="@+id/textView5"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toBottomOf="@+id/textView2" />

    <TextView
        android:id="@+id/textView2"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginBottom="12dp"
        android:layout_marginTop="27dp"
        app:layout_constraintBottom_toTopOf="@+id/textView4"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" />

</android.support.constraint.ConstraintLayout>




;


// activity_main3
<?xml version="1.0" encoding="utf-8"?>
<android.support.constraint.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".Main3Activity">


    <FrameLayout
        android:id="@+id/frameLayout"
        android:layout_width="0dp"
        android:layout_height="0dp"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintEnd_toEndOf="parent"
        app:layout_constraintStart_toStartOf="parent"
        app:layout_constraintTop_toBottomOf="@+id/scrollView2">

        <Button
            android:id="@+id/button2"
            android:layout_width="match_parent"
            android:layout_height="530dp"
            android:layout_gravity="center"
            android:text="Button" />

        <Button
            android:id="@+id/button3"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:layout_gravity="center_horizontal"
            android:layout_marginTop="30dp"

            android:text="Button" />
    </FrameLayout>

    <ScrollView
        android:id="@+id/scrollView2"
        android:layout_width="368dp"
        android:layout_height="58dp"
        android:layout_marginBottom="10dp"
        android:layout_marginTop="5dp"
        app:layout_constraintBottom_toTopOf="@+id/frameLayout"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent">

        <TableLayout
            android:layout_width="match_parent"
            android:layout_height="wrap_content"
            tools:layout_editor_absoluteX="8dp"
            tools:layout_editor_absoluteY="8dp">

            <TableRow
                android:layout_width="match_parent"
                android:layout_height="53dp">

                <TextView
                    android:id="@+id/textView3"
                    android:layout_width="62dp"
                    android:layout_height="match_parent"
                    android:background=""

                    android:text="Row 1" />
            </TableRow>

            <TableRow
                android:layout_width="match_parent"
                android:layout_height="36dp">

                <TextView
                    android:id="@+id/textView14"
                    android:layout_width="122dp"
                    android:layout_height="57dp"
                    android:text="row 2 column 1" />

                <TextView
                    android:id="@+id/textView13"
                    android:layout_width="125dp"
                    android:layout_height="match_parent"
                    android:text="row 2 column 2" />

                <TextView
                    android:id="@+id/textView12"
                    android:layout_width="170dp"
                    android:layout_height="match_parent"
                    android:text="row 2 column 3" />
            </TableRow>

            <TableRow
                android:layout_width="match_parent"
                android:layout_height="71dp">

                <TextView
                    android:id="@+id/textView16"
                    android:layout_width="wrap_content"
                    android:layout_height="match_parent"
                    android:text="row 3 column 1" />

                <TextView
                    android:id="@+id/textView15"
                    android:layout_width="wrap_content"
                    android:layout_height="56dp"
                    android:text="row 3 column 2" />
            </TableRow>

        </TableLayout>
    </ScrollView>

</android.support.constraint.ConstraintLayout>
