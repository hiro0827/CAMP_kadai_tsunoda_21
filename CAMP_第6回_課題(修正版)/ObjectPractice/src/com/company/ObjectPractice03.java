package com.company;

import org.omg.Messaging.SYNC_WITH_TRANSPORT;

public class ObjectPractice03 {
    public static void main(String[] args){
        Circle circle =new Circle();
        circle.radius =20;

        circle.getArea();
        System.out.println(circle.getArea());

        circle.getCircumference();
        System.out.println(circle.getCircumference());

    }
}
