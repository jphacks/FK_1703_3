<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provides information to the recognizer that specifies how to process the
 * request.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1.RecognitionConfig</code>
 */
class RecognitionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * *Required* Encoding of audio data sent in all `RecognitionAudio` messages.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.RecognitionConfig.AudioEncoding encoding = 1;</code>
     */
    private $encoding = 0;
    /**
     * *Required* Sample rate in Hertz of the audio data sent in all
     * `RecognitionAudio` messages. Valid values are: 8000-48000.
     * 16000 is optimal. For best results, set the sampling rate of the audio
     * source to 16000 Hz. If that's not possible, use the native sample rate of
     * the audio source (instead of re-sampling).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 2;</code>
     */
    private $sample_rate_hertz = 0;
    /**
     * *Required* The language of the supplied audio as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Example: "en-US".
     * See [Language Support](https://cloud.google.com/speech/docs/languages)
     * for a list of the currently supported language codes.
     *
     * Generated from protobuf field <code>string language_code = 3;</code>
     */
    private $language_code = '';
    /**
     * *Optional* Maximum number of recognition hypotheses to be returned.
     * Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     * within each `SpeechRecognitionResult`.
     * The server may return fewer than `max_alternatives`.
     * Valid values are `0`-`30`. A value of `0` or `1` will return a maximum of
     * one. If omitted, will return a maximum of one.
     *
     * Generated from protobuf field <code>int32 max_alternatives = 4;</code>
     */
    private $max_alternatives = 0;
    /**
     * *Optional* If set to `true`, the server will attempt to filter out
     * profanities, replacing all but the initial character in each filtered word
     * with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     * won't be filtered out.
     *
     * Generated from protobuf field <code>bool profanity_filter = 5;</code>
     */
    private $profanity_filter = false;
    /**
     * *Optional* A means to provide context to assist the speech recognition.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.SpeechContext speech_contexts = 6;</code>
     */
    private $speech_contexts;
    /**
     * *Optional* If `true`, the top result includes a list of words and
     * the start and end time offsets (timestamps) for those words. If
     * `false`, no word-level time offset information is returned. The default is
     * `false`.
     *
     * Generated from protobuf field <code>bool enable_word_time_offsets = 8;</code>
     */
    private $enable_word_time_offsets = false;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * *Required* Encoding of audio data sent in all `RecognitionAudio` messages.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.RecognitionConfig.AudioEncoding encoding = 1;</code>
     * @return int
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * *Required* Encoding of audio data sent in all `RecognitionAudio` messages.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.RecognitionConfig.AudioEncoding encoding = 1;</code>
     * @param int $var
     */
    public function setEncoding($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Speech\V1\RecognitionConfig_AudioEncoding::class);
        $this->encoding = $var;
    }

    /**
     * *Required* Sample rate in Hertz of the audio data sent in all
     * `RecognitionAudio` messages. Valid values are: 8000-48000.
     * 16000 is optimal. For best results, set the sampling rate of the audio
     * source to 16000 Hz. If that's not possible, use the native sample rate of
     * the audio source (instead of re-sampling).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 2;</code>
     * @return int
     */
    public function getSampleRateHertz()
    {
        return $this->sample_rate_hertz;
    }

    /**
     * *Required* Sample rate in Hertz of the audio data sent in all
     * `RecognitionAudio` messages. Valid values are: 8000-48000.
     * 16000 is optimal. For best results, set the sampling rate of the audio
     * source to 16000 Hz. If that's not possible, use the native sample rate of
     * the audio source (instead of re-sampling).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 2;</code>
     * @param int $var
     */
    public function setSampleRateHertz($var)
    {
        GPBUtil::checkInt32($var);
        $this->sample_rate_hertz = $var;
    }

    /**
     * *Required* The language of the supplied audio as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Example: "en-US".
     * See [Language Support](https://cloud.google.com/speech/docs/languages)
     * for a list of the currently supported language codes.
     *
     * Generated from protobuf field <code>string language_code = 3;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * *Required* The language of the supplied audio as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Example: "en-US".
     * See [Language Support](https://cloud.google.com/speech/docs/languages)
     * for a list of the currently supported language codes.
     *
     * Generated from protobuf field <code>string language_code = 3;</code>
     * @param string $var
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;
    }

    /**
     * *Optional* Maximum number of recognition hypotheses to be returned.
     * Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     * within each `SpeechRecognitionResult`.
     * The server may return fewer than `max_alternatives`.
     * Valid values are `0`-`30`. A value of `0` or `1` will return a maximum of
     * one. If omitted, will return a maximum of one.
     *
     * Generated from protobuf field <code>int32 max_alternatives = 4;</code>
     * @return int
     */
    public function getMaxAlternatives()
    {
        return $this->max_alternatives;
    }

    /**
     * *Optional* Maximum number of recognition hypotheses to be returned.
     * Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     * within each `SpeechRecognitionResult`.
     * The server may return fewer than `max_alternatives`.
     * Valid values are `0`-`30`. A value of `0` or `1` will return a maximum of
     * one. If omitted, will return a maximum of one.
     *
     * Generated from protobuf field <code>int32 max_alternatives = 4;</code>
     * @param int $var
     */
    public function setMaxAlternatives($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_alternatives = $var;
    }

    /**
     * *Optional* If set to `true`, the server will attempt to filter out
     * profanities, replacing all but the initial character in each filtered word
     * with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     * won't be filtered out.
     *
     * Generated from protobuf field <code>bool profanity_filter = 5;</code>
     * @return bool
     */
    public function getProfanityFilter()
    {
        return $this->profanity_filter;
    }

    /**
     * *Optional* If set to `true`, the server will attempt to filter out
     * profanities, replacing all but the initial character in each filtered word
     * with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     * won't be filtered out.
     *
     * Generated from protobuf field <code>bool profanity_filter = 5;</code>
     * @param bool $var
     */
    public function setProfanityFilter($var)
    {
        GPBUtil::checkBool($var);
        $this->profanity_filter = $var;
    }

    /**
     * *Optional* A means to provide context to assist the speech recognition.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.SpeechContext speech_contexts = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpeechContexts()
    {
        return $this->speech_contexts;
    }

    /**
     * *Optional* A means to provide context to assist the speech recognition.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.SpeechContext speech_contexts = 6;</code>
     * @param \Google\Cloud\Speech\V1\SpeechContext[]|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setSpeechContexts(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1\SpeechContext::class);
        $this->speech_contexts = $arr;
    }

    /**
     * *Optional* If `true`, the top result includes a list of words and
     * the start and end time offsets (timestamps) for those words. If
     * `false`, no word-level time offset information is returned. The default is
     * `false`.
     *
     * Generated from protobuf field <code>bool enable_word_time_offsets = 8;</code>
     * @return bool
     */
    public function getEnableWordTimeOffsets()
    {
        return $this->enable_word_time_offsets;
    }

    /**
     * *Optional* If `true`, the top result includes a list of words and
     * the start and end time offsets (timestamps) for those words. If
     * `false`, no word-level time offset information is returned. The default is
     * `false`.
     *
     * Generated from protobuf field <code>bool enable_word_time_offsets = 8;</code>
     * @param bool $var
     */
    public function setEnableWordTimeOffsets($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_word_time_offsets = $var;
    }

}

