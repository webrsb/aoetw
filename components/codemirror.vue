<template>
  <textarea ref="textArea" :value="modelValue"></textarea>
</template>

<script>
import CodeMirror from 'codemirror'
import 'codemirror/mode/javascript/javascript'
import 'codemirror/mode/shell/shell'
import 'codemirror/mode/vue/vue'
import 'codemirror/mode/htmlmixed/htmlmixed'
import 'codemirror/addon/edit/closetag'
import 'codemirror/addon/edit/closebrackets'
import 'codemirror/addon/fold/xml-fold'

export default {
  props: {
    modelValue: {
      type: String,
      default: ''
    },
    mode: {
      type: [String, Object],
      default: ''
    },
    theme: {
      type: String,
      default: 'default'
    },
    tabMode: {
      type: String,
      default: 'indent'
    },
    tabSize: {
      type: [Number, String],
      default: 2
    },
    lineWrapping: {
      type: Boolean,
      default: true
    },
    lineNumbers: {
      type: Boolean,
      default: true
    },
    readOnly: {
      type: Boolean,
      default: false
    }
  },
  setup (props, { emit }) {
    let CM = null
    let textArea = ref(null)

    onMounted(() => {
      CM = CodeMirror.fromTextArea(textArea.value, {
        mode: props.mode,
        theme: props.theme,
        tabMode: props.tabMode,
        tabSize: parseInt(props.tabSize, 10) || 2,
        lineWrapping: props.lineWrapping,
        lineNumbers: props.lineNumbers,
        autoCloseTags: true,
        autoCloseBrackets: true,
        readOnly: props.readOnly
      })

      CM.on('change', () => {
        emit('update:modelValue', CM.getValue())
      })
    })

    onBeforeUnmount(() => {
      if (CM) {
        CM.toTextArea()
      }
    })

    watch (() => props.modelValue, (newVal, oldVal) => {
      if (!oldVal || oldVal === '') {
        CM.setValue(newVal)
      }
    })

    return {
      textArea
    }
  }
}
</script>
