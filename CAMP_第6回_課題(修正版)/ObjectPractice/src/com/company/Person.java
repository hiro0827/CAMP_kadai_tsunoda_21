package com.company;

public class Person {
    public String name;
    public String from;

    public Person(String name, String from){
        this.name =name;
        this.from =from;
    }

    public void getSelfIntroduction(){
        System.out.println("私の名前は" + this.name + "です。" + this.from + "出身");
    }

}
