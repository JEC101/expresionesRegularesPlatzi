import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.nio.Buffer;
import java.util.regex.Matcher;
import java.util.regex.Pattern;


public class regex {
    public static void main(String[] args) {
        String file = "./results_6aeb6252-c531-449d-bf29-e11193358b8c.csv";

        Pattern pat = Pattern.compile("^2011\\-.*[zk].*$");

        try {
            BufferedReader br = new BufferedReader(new FileReader(file));
            String line;
            while ((line = br.readLine()) != null) {
                Matcher matcher = pat.matcher(line);
                if(matcher.find()) {
                    System.out.println(line);
                }
            }
        } catch (Exception e) {
            System.out.println("nope!");
        }
    }
}