import java.util.Scanner;
import java.util.Collections;
import java.util.Arrays;
import java.util.ArrayList;

public class homeWork {
    public static void main(String[] args) {

        int sum =0;
        String q1 ="犬より猫が好きだ"; //質問用変数1
        String q2 ="美味しいものに目がない"; //質問用変数2
        String q3 ="物作りが好きだ"; //質問用変数3
        String q4 ="休日はアウトドアよりインドア派だ"; //質問用変数4
        String q5 ="コーヒーより紅茶が好きだ"; //質問用変数5
        ArrayList<String> list = new ArrayList<String>(Arrays.asList(q1,q2,q3,q4,q5)); //配列に格納

        String q1b ="iPhoneよりAndroidが好きだ"; //質問用変数6
        String q2b ="夏より冬が好きだ"; //質問用変数7
        String q3b ="限定ものに弱い"; //質問用変数8
        String q4b ="新製品はつい手に取ってしまう"; //質問用変数9
        String q5b ="読書は紙より電子書籍派だ"; //質問用変数10
        ArrayList<String> listB = new ArrayList<String>(Arrays.asList(q1b,q2b,q3b,q4b,q5b)); //配列に格納

        String q1c ="大勢より一人 or 少人数でいるのが好きだ"; //質問用変数12
        String q2c ="布団よりベッド派だ"; //質問用変数12
        String q3c ="なんでも形から入る方だ"; //質問用変数13
        String q4c ="周りから変わり者と言われる"; //質問用変数14
        String q5c ="インテリアにこだわりがある"; //質問用変数15
        ArrayList<String> listC = new ArrayList<String>(Arrays.asList(q1c,q2c,q3c,q4c,q5c)); //配列に格納

        Collections.shuffle(list); //リストのシャッフル
        Collections.shuffle(listB); //リストのシャッフル
        Collections.shuffle(listC); //リストのシャッフル

//選択肢
        String[] ans = {"ちがう","どちらかと言うとちがう","どちらでもない","どちらかと言うとそうだ","そうだ"};
        String ansList =("1:" + ans[0]+" 2:"+ ans[1]+" 3:"+ ans[2]+" 4:"+ ans[3]+" 5:"+ ans[4]);


//質問の繰り返し処理
        for(int i = 0; i < 3; i++) {
            System.out.println(list.get(i));
            System.out.println(ansList);
            Scanner scanner = new Scanner(System.in);
            sum += scanner.nextInt();

//例外で終了
            if(i ==0 && sum >= 6 || sum <= 0){
                System.out.println("１〜５の数字を入力してください");
                sum = -100;
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
            System.out.println("相性100% 相性バッチリ！ 生涯の友ですね");
        }else if(sum >= 15 && sum < 20){
            System.out.println("相性80% 非常に気が合います。親友かもしれない");
        }else if(sum >= 10 && sum < 15){
            System.out.println("相性60% 相性はそこそこ。仲良くなれそう");
        }else if(sum >= 5 && sum < 10){
            System.out.println("相性30% 普通はこんなものじゃないかな");
        }else if(sum <= 5 && sum > 0){
            System.out.println("相性0% 逆に新しい扉を開けるかもしれない");
        }else {
            System.out.println("途中終了します");
        }

    }


}
