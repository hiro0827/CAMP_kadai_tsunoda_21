import java.util.Scanner;
import java.util.Collections;
import java.util.Arrays;
import java.util.ArrayList;

public class homeWork {
    public static void main(String[] args) {

        int sum =0;
        String q1 ="質問１"; //質問用変数1
        String q2 ="質問２"; //質問用変数2
        String q3 ="質問３"; //質問用変数3
        String q4 ="質問４"; //質問用変数4
        String q5 ="質問５"; //質問用変数5
        ArrayList<String> list = new ArrayList<String>(Arrays.asList(q1,q2,q3,q4,q5)); //配列に格納

        String q1b ="質問６"; //質問用変数6
        String q2b ="質問７"; //質問用変数7
        String q3b ="質問８"; //質問用変数8
        String q4b ="質問９"; //質問用変数9
        String q5b ="質問１０"; //質問用変数10
        ArrayList<String> listB = new ArrayList<String>(Arrays.asList(q1b,q2b,q3b,q4b,q5b)); //配列に格納

        String q1c ="質問１１"; //質問用変数12
        String q2c ="質問１２"; //質問用変数12
        String q3c ="質問１３"; //質問用変数13
        String q4c ="質問１４"; //質問用変数14
        String q5c ="質問１５"; //質問用変数15
        ArrayList<String> listC = new ArrayList<String>(Arrays.asList(q1c,q2c,q3c,q4c,q5c)); //配列に格納

        Collections.shuffle(list); //リストのシャッフル
        Collections.shuffle(listB); //リストのシャッフル
        Collections.shuffle(listC); //リストのシャッフル

//選択肢
        String[] ans = {"好きではない","あまり好きではない","どちらでもない","好き","とても好き"};
        String ansList =("1:" + ans[0]+" 2:"+ ans[1]+" 3:"+ ans[2]+" 4:"+ ans[3]+" :"+ ans[4]);


//質問の繰り返し処理
        for(int i = 0; i < 4; i++) {
            System.out.println(list.get(i));
            System.out.println(ansList);
            Scanner scanner = new Scanner(System.in);
            sum += scanner.nextInt();

//例外で終了
            if(i ==0 && sum >= 6 || sum <= 0){
                System.out.println(ansList);
                break;
                }
//質問分岐1
                else if(i == 0 && sum >= 4) {
                for (int j = 0; j < 1; j++) {
                    System.out.println(listB.get(j));
                    System.out.println(ansList);
                    sum += scanner.nextInt();
                    }
//質問分岐2
                }else if(i == 0 && sum <=2){
                    for (int k = 0; k < 1; k++) {
                        System.out.println(listC.get(k));
                        System.out.println(ansList);
                        sum += scanner.nextInt();
                        }
                    }
            }

//出力判定
        if(sum >= 20){
            System.out.println("BEST!");
        }else if(sum >= 15 && sum < 20){
            System.out.println("GREAT!");
        }else if(sum >= 10 && sum < 15){
            System.out.println("GOOD!");
        }else if(sum >= 5 && sum < 10){
            System.out.println("BAD");
        }else{
            System.out.println("VeryBAD");
        }
    }

}
