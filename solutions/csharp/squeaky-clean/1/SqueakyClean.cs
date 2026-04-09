using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

public static class Identifier
{
    private static string ReplaceUnderscoresToUnderline(string identifier) {
        return identifier.Replace(' ', '_');
    }

    private static string ReplaceControlCharsWithCTRL(string identifier) {
        var builder = new StringBuilder();
        
        foreach (char c in identifier) {
            if (char.IsControl(c)) {
                builder.Append("CTRL");
                continue;
            }
            
            builder.Append(c);
        }

        return builder.ToString();
    }

    private static string ConvertToCamelCase(string identifier) {
        var builder = new StringBuilder();
        
        for (int i = 0; i < identifier.Length; i++) {
            if (identifier[i] == '-')
                continue;
            if (i > 0 && identifier[i - 1] == '-') {
                builder.Append(char.ToUpper(identifier[i]));
                continue;
            }
            builder.Append(identifier[i]);
        }
        
        return builder.ToString();
    }

    private static string OmitNonLetters(string identifier) {
        var builder = new StringBuilder();

        foreach(char c in identifier) {
            // need to add '_' symbol for successfull passing `Task 1`.
            if (char.IsLetter(c) || c == '_') {
                builder.Append(c);
            }
        }

        return builder.ToString();
    }

    private static string OmitGreekLoweCaseLetters(string identifier) {
        var builder = new StringBuilder();

        foreach (char c in identifier) {
            int codePoint = c;

            if ((codePoint >= 945 && codePoint <= 969)) continue;

            builder.Append(c);
        }

        return builder.ToString();
    }
    
    public static string Clean(string identifier)
    {
        string res = ReplaceUnderscoresToUnderline(identifier);
        string res1 = ReplaceControlCharsWithCTRL(res);
        string res2 = ConvertToCamelCase(res1);
        string res3 = OmitNonLetters(res2);
        string res4 = OmitGreekLoweCaseLetters(res3);
        
        return res4;
    }
}
