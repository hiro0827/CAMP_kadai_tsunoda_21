package com.company;

public class Person {
    public String name;
    public String from;

    public Person(){
        name ="名前";
        from ="出身";
    }

    public void gesSelfIntroduction(){
        System.out.println("私の名前は" + name + "です。" + from + "出身");
    }

    public void getSelfIntroduvtion(String name, String from){
        System.out.println("私の名前は" + name + "です。" + from + "出身");
    }


}
